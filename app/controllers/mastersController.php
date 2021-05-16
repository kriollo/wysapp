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
class mastersController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        global $config;
        $op = (new Model\Adminwys)->getIdMenu($router->getController(),$router->getMethod());
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => $op, 'valida_acceso' => true]
        ));
        
        switch($this->method){
            default:
                $this->template->display('masters/principal',array(
                    'menu_op' => $op
                ));
            break;
        }
        
    }
}