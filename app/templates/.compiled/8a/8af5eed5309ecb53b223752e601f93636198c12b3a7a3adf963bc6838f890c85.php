<?php

/* users/perfil_user.twig */
class __TwigTemplate_4eb2269ffbcc21f4515f5dd966565b4f6b2e7edeb143bd9c2a5c632cedc3054a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/perfil_user.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminwys/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h4 class=\"m-0 text-dark\"><i class=\"fa fa-user icon-title\"></i> Perfil de Usuario</h4>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"portal\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Perfil de Usuario</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["id_user"] ?? null), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"card-body\">
                    <input type=\"hidden\" id=\"id_user\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "'>
                    <div class=\"col col-md-12 col-12\">
                        ";
        // line 30
        if ((($context["reset_pass"] ?? null) == true)) {
            // line 31
            echo "                            <div class=\"col col-md-6 offset-3\"><center>
                                <div class=\"form-group\">
                                    <label class=\"control-label text-danger\"><h3>Su contraseña ha vencido!</h3></label>
                                    <p></p>
                                    <label class=\"control-label text-danger\">Debe cambiar su contraseña</label>
                                    <p> Nueva clave: <input class=\"form-text\" type=\"password\" id = \"pass_new\"></p>
                                    <p> Volver a Ingresar: <input class=\"form-text\" type=\"password\" id = \"repass_new\"></p>
                                    <p><button type=\"button\" class=\"btn btn-block btn-success col-md-2\" onclick=\"resetpass();\">Modificar</button></p>
                                </div></center>
                            </div>
                        ";
        } else {
            // line 42
            echo "                            <div class=\"row\">
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"btn btn-default btn-file\">
                                        ";
            // line 45
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
                // line 46
                echo "                                            <img class=\"user-image\" src=\"assets/adminwys/img/avatares/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 48
                echo "                                            <img class=\"user-image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->get_gravatar(twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "email", array(), "array")), "html", null, true);
                echo "\">
                                        ";
            }
            // line 50
            echo "                                        <i class=\"fas fa-edit\"></i>
                                        
                                        <input type=\"file\" id=\"file_avatar\" onchange=\"updateAvatar();\">
                                        
                                    </div>
                                </div>
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Email</label>
                                        <label class=\"control-label\">: ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "email", array(), "array"), "html", null, true);
            echo "</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Rol de acceso</label>
                                        <label class=\"control-label\">: ";
            // line 64
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rol", array(), "array")) ? ("Admin") : ("Usuario"));
            echo "</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Perfil Asignado</label>
                                        <label class=\"control-label\">: ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "perfil", array(), "array"), "html", null, true);
            echo "</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Pagina de Inicio</label>
                                        <label class=\"control-label\">: ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "pagina_inicio", array(), "array"), "html", null, true);
            echo "</label>
                                    </div>    
                                </div>
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Reset Password</label>
                                        <p> Nueva clave: <input class=\"form-text\" type=\"password\" id = \"pass_new\"></p>
                                        <p> Volver a Ingresar: <input class=\"form-text\" type=\"password\" id = \"repass_new\"></p>
                                        <p><button type=\"button\" class=\"btn btn-block btn-success col-md-4\" onclick=\"resetpass();\">Modificar</button></p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 87
        echo "                    </div>
                </div>
            </div>     
        </div>
    <!-- /.container-fluid -->
    </div>
";
    }

    // line 94
    public function block_appScript($context, array $blocks = array())
    {
        // line 95
        echo "    <script src=\"assets/jscontrollers/users/perfil_user.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "users/perfil_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 95,  163 => 94,  153 => 87,  137 => 74,  129 => 69,  121 => 64,  113 => 59,  102 => 50,  96 => 48,  90 => 46,  88 => 45,  83 => 42,  70 => 31,  68 => 30,  63 => 28,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h4 class=\"m-0 text-dark\"><i class=\"fa fa-user icon-title\"></i> Perfil de Usuario</h4>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"portal\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Perfil de Usuario</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h1 class=\"card-title\">{{ owner_user['name'] |capitalize }}{{ id_user }}</h1>
                </div>
                <div class=\"card-body\">
                    <input type=\"hidden\" id=\"id_user\" value='{{ owner_user['id_user'] }}'>
                    <div class=\"col col-md-12 col-12\">
                        {% if reset_pass == true %}
                            <div class=\"col col-md-6 offset-3\"><center>
                                <div class=\"form-group\">
                                    <label class=\"control-label text-danger\"><h3>Su contraseña ha vencido!</h3></label>
                                    <p></p>
                                    <label class=\"control-label text-danger\">Debe cambiar su contraseña</label>
                                    <p> Nueva clave: <input class=\"form-text\" type=\"password\" id = \"pass_new\"></p>
                                    <p> Volver a Ingresar: <input class=\"form-text\" type=\"password\" id = \"repass_new\"></p>
                                    <p><button type=\"button\" class=\"btn btn-block btn-success col-md-2\" onclick=\"resetpass();\">Modificar</button></p>
                                </div></center>
                            </div>
                        {% else %}
                            <div class=\"row\">
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"btn btn-default btn-file\">
                                        {% if owner_user['foto'] == 1 %}
                                            <img class=\"user-image\" src=\"assets/adminwys/img/avatares/{{ owner_user['name_foto'] }}\">
                                        {% else %}
                                            <img class=\"user-image\" src=\"{{ get_gravatar(owner_user['email']) }}\">
                                        {% endif %}
                                        <i class=\"fas fa-edit\"></i>
                                        
                                        <input type=\"file\" id=\"file_avatar\" onchange=\"updateAvatar();\">
                                        
                                    </div>
                                </div>
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Email</label>
                                        <label class=\"control-label\">: {{ owner_user['email'] }}</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Rol de acceso</label>
                                        <label class=\"control-label\">: {{ owner_user['rol'] ? \"Admin\":\"Usuario\" }}</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Perfil Asignado</label>
                                        <label class=\"control-label\">: {{ owner_user['perfil'] }}</label>
                                    </div>
                        
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Pagina de Inicio</label>
                                        <label class=\"control-label\">: {{ owner_user['pagina_inicio'] }}</label>
                                    </div>    
                                </div>
                                <div class=\"col col-md-4 col-12\">
                                    <div class=\"form-group\">
                                        <label class=\"control-label\">Reset Password</label>
                                        <p> Nueva clave: <input class=\"form-text\" type=\"password\" id = \"pass_new\"></p>
                                        <p> Volver a Ingresar: <input class=\"form-text\" type=\"password\" id = \"repass_new\"></p>
                                        <p><button type=\"button\" class=\"btn btn-block btn-success col-md-4\" onclick=\"resetpass();\">Modificar</button></p>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>     
        </div>
    <!-- /.container-fluid -->
    </div>
{% endblock %}
{% block appScript %}
    <script src=\"assets/jscontrollers/users/perfil_user.js\"></script>
{% endblock %}", "users/perfil_user.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\perfil_user.twig");
    }
}
