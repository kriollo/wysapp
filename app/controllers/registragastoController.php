<?php

/*
 * This file is part of the Ocrend Framewok 3 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Helpers as Helper;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;
use Ocrend\Kernel\Generator\Commands\Model as CommandsModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Controlador portal/
 *
 * @author Jorge Jara H <kriollone@gmail.com>
*/
class registragastoController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        $op = (new Model\Adminwys)->getIdMenu($router->getController(),$router->getMethod());
        
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => $op, 'valida_acceso' => true]
        ));        
        switch($this->method){
            case 'documento':
                $this->template->display('registragasto/registro_doc', array(
                    'menu_op' => $op
                ));
            break;
            
            case 'listar_doc':
                $this->template->display('registragasto/listar_doc', array(
                    'menu_op' => $op
                ));
            break;
            case 'gastos_vs':
                $this->template->display('registragasto/gastos_vs', array(
                    'menu_op' => $op
                ));
            break;
            default:
                $this->template->display('registragasto/principal', array(
                    'menu_op' => $op
                ));
            break;
        }

    }
}
