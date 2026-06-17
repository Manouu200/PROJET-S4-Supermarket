<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dashboard/caisse', 'Home::caisse');
$routes->get('/dashboard/produits', 'Home::produits');
$routes->get('/logout', 'Login::logout');

