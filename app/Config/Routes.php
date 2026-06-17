<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('dashboard/caisse', 'Home::caisse');
$routes->get('dashboard/produits', 'Home::produits');
