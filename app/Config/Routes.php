<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('/form', 'FormController::index');
$routes->add('/form/hitung', 'FormController::hitung');
