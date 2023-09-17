<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductsController::Ancheta');
$routes->get('/product/(:any)', 'ProductsController::product/$1');
$routes->post('/save', 'ProductsController::save');
$routes->get('/delete/(:any)', 'ProductsController::delete/$1');
