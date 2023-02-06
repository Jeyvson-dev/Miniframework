<?php
namespace App;

use MF\Init\Bootstrap;

    class Route extends Bootstrap{

        protected function initRoutes(){

            $routes['home'] = array(
                'routes' => '/',
                'controller' => 'indexController',
                'action' => 'index'

            );

            $routes['sobre_nos'] = array(
                'routes' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'

            );

            $this->setRoutes($routes);

        }
     
    }

?>
