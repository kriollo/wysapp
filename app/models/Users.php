<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Users
 */
class Users extends Models implements IModels {
    use DBModel;

    /**
     * Máximos intentos de inincio de sesión de un usuario
     *
     * @var int
     */
    const MAX_ATTEMPTS = 5;

    /**
     * Tiempo entre máximos intentos en segundos
     *
     * @var int
     */
    const MAX_ATTEMPTS_TIME = 120; # (dos minutos)

    /**
     * Log de intentos recientes con la forma 'email' => (int) intentos
     *
     * @var array
     */
    private $recentAttempts = array();

    /**
     * Hace un set() a la sesión login_user_recentAttempts con el valor actualizado.
     *
     * @return void
    */
    private function updateSessionAttempts() {
        global $session;

        $session->set('login_user_recentAttempts', $this->recentAttempts);
    }

    /**
     * Revisa si las contraseñas son iguales
     *
     * @param string $pass : Contraseña sin encriptar
     * @param string $pass_repeat : Contraseña repetida sin encriptar
     *
     * @throws ModelsException cuando las contraseñas no coinciden
     */
    private function checkPassMatch(string $pass, string $pass_repeat) {
        if ($pass != $pass_repeat) {
            throw new ModelsException('Las contraseñas no coinciden.');
        }
    }

    /**
     * Verifica el email introducido, tanto el formato como su existencia en el sistema
     *
     * @param string $email: Email del usuario
     *
     * @throws ModelsException en caso de que no tenga formato válido o ya exista
     */
    private function checkEmail(string $email) {
        # Formato de email
        if (!Helper\Strings::is_email($email)) {
            throw new ModelsException('El email no tiene un formato válido.');
        }
        # Existencia de email
        $email = $this->db->scape($email);
        $query = $this->db->select('id_user', 'users', null, "email='$email'", 1);
        if (false !== $query) {
            throw new ModelsException('El email introducido ya existe.');
        }
    }

    /**
     * Restaura los intentos de un usuario al iniciar sesión
     *
     * @param string $email: Email del usuario a restaurar
     *
     * @throws ModelsException cuando hay un error de lógica utilizando este método
     * @return void
     */
    private function restoreAttempts(string $email) {       
        if (array_key_exists($email, $this->recentAttempts)) {
            $this->recentAttempts[$email]['attempts'] = 0;
            $this->recentAttempts[$email]['time'] = null;
            $this->updateSessionAttempts();
        } else {
            throw new ModelsException('Error lógico');
        }
    }

    /**
     * Genera la sesión con el id del usuario que ha iniciado
     *
     * @param array $user_data: Arreglo con información de la base de datos, del usuario
     *
     * @return void
     */
    private function generateSession(array $user_data) {
        global $session, $cookie, $config;
        
        # Generar un session hash
        $cookie->set('session_hash', md5(time()), $config['sessions']['user_cookie']['lifetime']);
        
        # Generar la sesión del usuario
        $session->set($cookie->get('session_hash') . '__user_id',(int) $user_data['id_user']);

        # Generar data encriptada para prolongar la sesión
        if($config['sessions']['user_cookie']['enable']) {
            # Generar id encriptado
            $encrypt = Helper\Strings::ocrend_encode($user_data['id_user'], $config['sessions']['user_cookie']['key_encrypt']);

            # Generar cookies para prolongar la vida de la sesión
            $cookie->set('appsalt', Helper\Strings::hash($encrypt), $config['sessions']['user_cookie']['lifetime']);
            $cookie->set('appencrypt', $encrypt, $config['sessions']['user_cookie']['lifetime']);
        }
    }

    /**
     * Verifica en la base de datos, el email y contraseña ingresados por el usuario
     *
     * @param string $email: Email del usuario que intenta el login
     * @param string $pass: Contraseña sin encriptar del usuario que intenta el login
     *
     * @return bool true: Cuando el inicio de sesión es correcto 
     *              false: Cuando el inicio de sesión no es correcto
     */
    private function authentication(string $email,string $pass) : bool {
        $email = $this->db->scape($email);
        $query = $this->db->select('id_user,pass,estado,name','users',null, "email='$email'",1);
        
        # Incio de sesión con éxito
        if(false !== $query && Helper\Strings::chash($query[0]['pass'],$pass) && $query[0]['estado'] == 1) {

            # Restaurar intentos
            $this->restoreAttempts($email);

            # Generar la sesión
            $this->generateSession($query[0]);
            return true;
        }

        return false;
    }

    /**
     * Establece los intentos recientes desde la variable de sesión acumulativa
     *
     * @return void
     */
    private function setDefaultAttempts() {
        global $session;

        if (null != $session->get('login_user_recentAttempts')) {
            $this->recentAttempts = $session->get('login_user_recentAttempts');
        }
    }
    
    /**
     * Establece el intento del usuario actual o incrementa su cantidad si ya existe
     *
     * @param string $email: Email del usuario
     *
     * @return void
     */
    private function setNewAttempt(string $email) {
        if (!array_key_exists($email, $this->recentAttempts)) {
            $this->recentAttempts[$email] = array(
                'attempts' => 0, # Intentos
                'time' => null # Tiempo 
            );
        } 

        $this->recentAttempts[$email]['attempts']++;
        $this->updateSessionAttempts();
    }

    /**
     * Controla la cantidad de intentos permitidos máximos por usuario, si llega al límite,
     * el usuario podrá seguir intentando en self::MAX_ATTEMPTS_TIME segundos.
     *
     * @param string $email: Email del usuario
     *
     * @throws ModelsException cuando ya ha excedido self::MAX_ATTEMPTS
     * @return void
     */
    private function maximumAttempts(string $email) {
        if ($this->recentAttempts[$email]['attempts'] >= self::MAX_ATTEMPTS) {
            
            # Colocar timestamp para recuperar más adelante la posibilidad de acceso
            if (null == $this->recentAttempts[$email]['time']) {
                $this->recentAttempts[$email]['time'] = time() + self::MAX_ATTEMPTS_TIME;
            }
            
            if (time() < $this->recentAttempts[$email]['time']) {
                # Setear sesión
                $this->updateSessionAttempts();
                # Lanzar excepción
                throw new ModelsException('Ya ha superado el límite de intentos para iniciar sesión.');
            } else {
                $this->restoreAttempts($email);
            }
        }
    }   

    /**
     * Obtiene datos de un usuario según su id en la base de datos
     *    
     * @param int $id: Id del usuario a obtener
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios 
     *
     * @return false|array con información del usuario
     */   
    public function getUserById(int $id, string $select = '*') {
        return $this->db->select($select,'users',null,"id_user='$id'",1);
    }
    public function getUserByIdPOST() {
        global $http;
        $id_user = $http->request->get('id_user');
        $result = $this->getUserById($id_user);
        return $result[0];
    }
    /**
     * Obtiene a todos los usuarios
     *    
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios 
     *
     * @return false|array con información de los usuarios
     */  
    public function getUsers(string $select = '*',string $filtro = '1=1') {
        return $this->db->select($select, 'users','',$filtro);
    }

    /**
     * Obtiene datos del usuario conectado actualmente
     *
     * @param string $select : Por defecto es *, se usa para obtener sólo los parámetros necesarios
     *
     * @throws ModelsException si el usuario no está logeado
     * @return array con datos del usuario conectado
     */
    public function getOwnerUser(string $select = '*') : array {
        if(null !== $this->id_user) {    
               
            $user = $this->db->select($select,'users',null, "id_user='$this->id_user'",1);

            # Si se borra al usuario desde la base de datos y sigue con la sesión activa
            if(false === $user) {
                $this->logout();
            }

            return $user[0];
        } 
           
        throw new \RuntimeException('El usuario no está logeado.');
    }

     /**
     * Realiza la acción de login dentro del sistema
     *
     * @return array : Con información de éxito/falla al inicio de sesión.
     */
    public function login() : array {
        try {
            global $http;

            # Definir de nuevo el control de intentos
            $this->setDefaultAttempts();   

            # Obtener los datos $_POST
            $email = strtolower($http->request->get('email'));
            $pass = $http->request->get('pass');

            # Verificar que no están vacíos
            if (Helper\Functions::e($email, $pass)) {
                throw new ModelsException('Credenciales incompletas.');
            }
            
            # Añadir intentos
            $this->setNewAttempt($email);
        
            # Verificar intentos 
            $this->maximumAttempts($email);

            # Autentificar
            if ($this->authentication($email, $pass)) {
                return array('success' => 1, 'message' => 'Conectado con éxito.');
            }
            
            throw new ModelsException('Credenciales incorrectas.');

        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }        
    }

    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el usuario nuevo.
     */
    public function registeruser() : array {
        try {
            global $http;
            # Obtener los datos $_POST
            $name = $http->request->get('name');
            $email = mb_strtolower($http->request->get('email'));
            $pass = $http->request->get('pass');
            $pass_repeat = $http->request->get('pass_repeat');
            $perfil = mb_strtolower($http->request->get('perfil'));
            $pagina_inicio = $http->request->get('pagina_inicio');
            $rol = $http->request->get('rol');
            
            # Verificar que no están vacíos
            if (Helper\Functions::e($name, $email, $pass, $pass_repeat)) {
                throw new ModelsException('Todos los datos son necesarios');
            }elseif ($perfil == '--'){
                throw new ModelsException('Debe seleccionar un perfil');
            }

            # Verificar email 
            $this->checkEmail($email);

            # Veriricar contraseñas
            $this->checkPassMatch($pass, $pass_repeat);

            
            # Registrar al usuario
            $id_user = $this->db->insert('users', array(
                'name' => $name,
                'email' => $email,
                'pass' => Helper\Strings::hash($pass),
                'perfil' => $perfil,
                'pagina_inicio' => $pagina_inicio,
                'rol' => $rol,
                'fecha_pass' => date('Y-m-d')
            ));
            
            # Asigna menu a usuario
            if ('DEFINIDO' != $perfil ){

                //$id_user=$this->db->lastInsertId();
  
                $this->db->query("DELETE from tbladm_perfilesuser
                WHERE id_user='".$id_user."';");
  
                $this->db->query("INSERT INTO tbladm_perfilesuser(id_user,id_menu,id_submenu)
                select '".$id_user."',id_menu,id_submenu FROM tbladm_perfiles WHERE LCASE(nombre)='$perfil';");
            }

            return array('success' => 1, 'title' => 'Maestro de Usuario','message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0,'title' => 'Maestro de Usuario', 'message' => $e->getMessage());
        }        
    }
    public function updateuser() : array {
        try {
            global $http;

            $id_user = $http->request->get('id_user');
            $name = $http->request->get('name');
            $email = strtolower($http->request->get('email'));
            $perfil = $http->request->get('perfil');
            $pagina_inicio = $http->request->get('pagina_inicio');
            $rol = $http->request->get('rol');
            
            # Verificar que no están vacíos
            if (Helper\Functions::e($name, $email)) {
                throw new ModelsException('Todos los datos son necesarios');
            }elseif ($perfil == '--'){
                throw new ModelsException('Debe seleccionar un perfil');
            }
            
            // if (true == $rol) $rol =1; else $rol=0;
            //throw new ModelsException($rol);
            # Update al usuario
            $this->db->update('users', array(
                'name' => $name,
                'email' => $email,
                'perfil' => $perfil,
                'pagina_inicio' => $pagina_inicio,
                'rol' => $rol,
                'fecha_pass' => date('Y-m-d')
            ),"id_user=".$id_user);

            # Asigna menu a usuario
            if ('DEFINIDO' != $perfil ){
                $this->db->query("Delete from tbladm_perfilesuser
                WHERE id_user='$id_user';");
  
                $this->db->query("Insert Into tbladm_perfilesuser(id_user,id_menu,id_submenu)
                select '$id_user',id_menu,id_submenu from tbladm_perfiles where nombre='$perfil';");
            }

            return array('success' => 1, 'title' => 'Maestro de Usuario','message' => 'Actualizado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0,'title' => 'Maestro de Usuario', 'message' => $e->getMessage());
        }
    }
    /**
      * Envía un correo electrónico al usuario que quiere recuperar la contraseña, con un token y una nueva contraseña.
      * Si el usuario no visita el enlace, el sistema no cambiará la contraseña.
      *
      * @return array<string,integer|string>
    */  
    public function lostpass() : array {
        try {
            global $http, $config;

            # Obtener datos $_POST
            $email = $http->request->get('email');
            
            # Campo lleno
            if (Helper\Functions::emp($email)) {
                throw new ModelsException('El campo email debe estar lleno.');
            }

            # Filtro
            $email = $this->db->scape($email);

            # Verificar email 
            if (!Helper\Strings::is_email($email)) {
                throw new ModelsException('El email no tiene un formato válido.');
            }

            # Obtener información del usuario 
            $user_data = $this->db->select('id_user,name', 'users', null, "email='$email'", 1);

            # Verificar correo en base de datos 
            if (false === $user_data) {
                throw new ModelsException('El email no está registrado en el sistema.');
            }

            # Generar token y contraseña 
            $token = md5(time());
            $pass = uniqid();
            $link = $config['build']['url'] . 'lostpass?token='.$token.'&user='.$user_data[0]['id_user'];

            # Construir mensaje y enviar mensaje
            $HTML = 'Hola <b>'. $user_data[0]['name'] .'</b>, ha solicitado recuperar su contraseña perdida, si no ha realizado esta acción no necesita hacer nada.
					<br />
					<br />
					Para cambiar su contraseña por <b>'. $pass .'</b> haga <a href="'. $link .'" target="_blank">clic aquí</a> o en el botón de recuperar.';

            # Enviar el correo electrónico
            $dest = array();
			$dest[$email] = $user_data[0]['name'];
            $email_send = Helper\Emails::send($dest,array(
                # Título del mensaje
                '{{title}}' => 'Recuperar contraseña de ' . $config['build']['name'],
                # Url de logo
                '{{url_logo}}' => $config['build']['url'],
                # Logo
                '{{logo}}' => $config['mailer']['logo'],
                # Contenido del mensaje
                '{{content}} ' => $HTML,
                # Url del botón
                '{{btn-href}}' => $link,
                # Texto del boton
                '{{btn-name}}' => 'Recuperar Contraseña',
                # Copyright
                '{{copyright}}' => '&copy; '.date('Y') .' <a href="'.$config['build']['url'].'">'.$config['build']['name'].'</a> - Todos los derechos reservados.'
              ),0);

            # Verificar si hubo algún problema con el envío del correo
            if(false === $email_send) {
                throw new ModelsException('No se ha podido enviar el correo electrónico.');
            }

            # Actualizar datos 
            $id_user = $user_data[0]['id_user'];
            $this->db->update('users',array(
                'tmp_pass' => Helper\Strings::hash($pass),
                'token' => $token
            ),"id_user='$id_user'",1);

            return array('success' => 1, 'message' => 'Se ha enviado un enlace a su correo electrónico.');
        } catch(ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
     * Desconecta a un usuario si éste está conectado, y lo devuelve al inicio
     *
     * @return void
     */    
    public function logout() {
        global $session, $cookie;
	    
        $session->remove($cookie->get('session_hash') . '__user_id');
        foreach($cookie->all() as $name => $value) {
            $cookie->remove($name);
        }

        Helper\Functions::redir();
    }

    /**
     * Cambia la contraseña de un usuario en el sistema, luego de que éste haya solicitado cambiarla.
     * Luego retorna al sitio de inicio con la variable GET success=(bool)
     *
     * La URL debe tener la forma URL/lostpass?token=TOKEN&user=ID
     *
     * @return void
     */  
    public function changeTemporalPass() {
        global $config, $http;
        
        # Obtener los datos $_GET 
        $id_user = $http->query->get('user');
        $token = $http->query->get('token');

        $success = false;
        if (!Helper\Functions::emp($token) && is_numeric($id_user) && $id_user >= 1) {
            # Filtros a los datos
            $id_user = $this->db->scape($id_user);
            $token = $this->db->scape($token);
            # Ejecutar el cambio
            $this->db->query("UPDATE users SET pass=tmp_pass, tmp_pass=NULL, token=NULL
            WHERE id_user='$id_user' AND token='$token' LIMIT 1;");
            # Éxito
            $success = true;
        }
        
        # Devolover al sitio de inicio
        Helper\Functions::redir($config['build']['url'] . '?sucess=' . (int) $success);
    }
    public function update_estado_user() {
        global $config;

        # Actualiza Estado
        $this->db->query("UPDATE users SET estado=if(estado=0,1,0)
        WHERE id_user='$this->id' LIMIT 1;");

        # Redireccionar a la página principal del controlador
        Helper\Functions::redir($config['build']['url'] . 'users/usuarios');
    }
    final public function update_perfil_usuario() {
        try {
            global $http;
  
            $id_user = $http->request->get('id_user');
  
            $this->db->query("Delete from tbladm_perfilesuser
            WHERE id_user='$id_user';");
  
            $p = (new Model\Adminwys)->getAllMenu();
            foreach ($p as $value => $data) {
  
                $a = $http->request->get('check-'.$data['id_menu'].'-'.$data['id_submenu']);
                if (true == $a){
                    $id_menu = $data['id_menu'];
                    $id_submenu = $data['id_submenu'];
                    $this->db->insert('tbladm_perfilesuser',array(
                        'id_user' => $id_user,
                        'id_menu' => $id_menu,
                        'id_submenu' => $id_submenu
                    ));
                }
            }
  
            $this->db->update('users',array(
                'perfil' => 'DEFINIDO'
            ),"id_user='$id_user'");
  
            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function updateAvatar(){
        try {
            global $http, $config;

            $id_user = $http->request->get('id_user');
            $avatar = $http->files->get('avatar');

            if (null != $avatar && true == Helper\Files::is_image($avatar->getClientOriginalName()) ){
               
                $ext_foto = $avatar->getClientOriginalExtension();
                $img_name = $id_user.'.'.$ext_foto;
  
                $avatar->move(___ROOT___ . $config['router']['avatar'], $img_name);
                $this->db->query("UPDATE users SET foto=1, name_foto='".$img_name."' WHERE id_user='$id_user'");
                return array('success' => 1, 'message' => "Avatar Actualizado...");
            }

            return array('success' => 0, 'message' => "No es una imagen valida...");
            
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }  
    }
    public function resetpass() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $id_user = $http->request->get('id_user');
            $pass = $http->request->get('pass_new');
            $pass_repeat = $http->request->get('repass_new');

            # Verificar que no están vacíos
            if (Helper\Functions::e($pass, $pass_repeat)) {
                throw new ModelsException('Todos los datos son necesarios');
            }

            # Veriricar contraseñas
            $this->checkPassMatch($pass, $pass_repeat);



            $pass = Helper\Strings::hash($pass);

            # Actualiza contraseña
            $fecha_reset = date ( 'Y-m-j',strtotime ( '+60 day' , strtotime ( date("Y-m-d") ) ));
            $this->db->query("UPDATE users SET pass='$pass', fecha_pass='".$fecha_reset."', tmp_pass='', token=''
            WHERE id_user='$id_user' LIMIT 1;");

            return array('success' => 1, 'title' => 'Reset Password Usuario','message' => 'Password actualizada con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'title' => 'Reset Password Usuario', 'message' => $e->getMessage());
        }
    }
    public function getUsersAll() {
        return $this->db->query_select("Select * from users");
    }
    public function getMenuOwnerUser() {
        $usuario = $this->getOwnerUser();
        if ( $usuario['rol'] == 1 )
            $result = (new Model\Adminwys)->getAllMenu();
        else
            $result = (new Model\Adminwys)->getMenuUser($usuario['id_user']);
        return $result;
    }
    public function update_online_user($opcion) {   
        
        // Actualiza Estado ON LINE
        $ahora = time();
        $limite = $ahora-24*60;
        $this->db->query("UPDATE users SET online_fecha=0 WHERE online_fecha < ".$limite);
        if ($opcion === 'in'){
            $this->db->query("UPDATE users SET online_fecha=".$ahora." WHERE id_user = '$this->id_user' LIMIT 1;");
        }
        else if ($opcion === 'out') {
            $this->db->query("UPDATE users SET online_fecha=0 WHERE id_user = '$this->id_user' LIMIT 1;");
        }
        
    } 
    public function validar_cambio_pass() {
        return  $this->db->query_select('SELECT fecha_pass from users where id_user="'.$this->id_user.'" and  fecha_pass<=date(now())');
    }
   

    // TEST INFRA
    public function getUserById2(int $id, string $select = '*') {
        return $this->db->select($select,'tblmaster_campus',null,"id='$id'",1);
    }

    public function updateFotoCamara(){
        try {
            global $http, $config;

            $foto = $http->files->get('foto');

            if (null != $foto && true == Helper\Files::is_image($foto->getClientOriginalName()) ){
               
                $ext_foto = $foto->getClientOriginalExtension();
                $img_name = 'test.'.$ext_foto;
  
                $foto->move(___ROOT___ . $config['router']['avatar'], $img_name);
                

                $html ="<img src='".$config['router']['avatar'].$img_name."' alt='' class='img-thumbnail'>";


                return array('success' => 1, 'message' => "Foto capturada Actualizado...", 'html' => $html);
            }

            return array('success' => 0, 'message' => "No es una imagen valida...");
            
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }  
    }
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }
}