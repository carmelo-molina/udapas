<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Usuario::login');
$routes->post('ingresar', 'Usuario::ingresar');
