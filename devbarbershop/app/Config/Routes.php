<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::autenticar');
$routes->get('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index');

//CLIENTE
$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/create', 'Clientes::create');
$routes->post('/clientes/store', 'Clientes::store');
$routes->get('/clientes/edit/(:num)', 'Clientes::edit/$1');
$routes->post('/clientes/update/(:num)', 'Clientes::update/$1');
$routes->get('/clientes/delete/(:num)', 'Clientes::delete/$1');

//FORNECEDOR
$routes->get('/fornecedores', 'Fornecedores::index');
$routes->get('/fornecedores/create', 'Fornecedores::create');
$routes->post('/fornecedores/store', 'Fornecedores::store');
$routes->get('/fornecedores/edit/(:num)', 'Fornecedores::edit/$1');
$routes->post('/fornecedores/update/(:num)', 'Fornecedores::update/$1');
$routes->get('/fornecedores/delete/(:num)', 'Fornecedores::delete/$1');

//FUNCIONARIOS
$routes->get('/funcionarios', 'Funcionarios::index');
$routes->get('/funcionarios/create', 'Funcionarios::create');
$routes->post('/funcionarios/store', 'Funcionarios::store');
$routes->get('/funcionarios/edit/(:num)', 'Funcionarios::edit/$1');
$routes->post('/funcionarios/update/(:num)', 'Funcionarios::update/$1');
$routes->get('/funcionarios/delete/(:num)', 'Funcionarios::delete/$1');

//