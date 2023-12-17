<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
// $route['admin'] = 'admin/overview';
$routes->get('/admin', 'Page::admin');