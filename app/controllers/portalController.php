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
use Ocrend\Kernel\Router\IRouter;

/**
 * Controlador portal/
 *
 * @author Jorge Jara H <kriollone@gmail.com>
*/
class portalController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        
        parent::__construct($router,array(
            'users_logged' => true,
            'valida_pass_vencida' => false
        ));
        
        if ((new Model\Users)->validar_cambio_pass() != false) {
            $this->template->display('users/perfil_user',array(
                'reset_pass' => true
            ));
        }else{
            switch($this->method){
                case "perfil_user":
                    $this->template->display('users/perfil_user',array(
                    ));
                break;
                default:
                    $this->template->display('adminwys/portal');
                break;
            }
        }
    }
}