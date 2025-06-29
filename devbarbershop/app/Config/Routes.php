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

//SERVIÇOS

$routes->get('/servicos', 'Servicos::index');
$routes->get('/servicos/create', 'Servicos::create');
$routes->post('/servicos/store', 'Servicos::store');
$routes->get('/servicos/edit/(:num)', 'Servicos::edit/$1');
$routes->post('/servicos/update/(:num)', 'Servicos::update/$1');
$routes->get('/servicos/delete/(:num)', 'Servicos::delete/$1');

//PRODUTOS

$routes->get('/produtos', 'Produtos::index');
$routes->get('/produtos/create', 'Produtos::create');
$routes->post('/produtos/store', 'Produtos::store');
$routes->get('/produtos/edit/(:num)', 'Produtos::edit/$1');
$routes->post('/produtos/update/(:num)', 'Produtos::update/$1');
$routes->get('/produtos/delete/(:num)', 'Produtos::delete/$1');


//Agendamentos

$routes->get('/agendamentos', 'Agendamentos::index');
$routes->get('/agendamentos/create', 'Agendamentos::create');
$routes->post('/agendamentos/store', 'Agendamentos::store');
$routes->get('/agendamentos/edit/(:num)', 'Agendamentos::edit/$1');
$routes->post('/agendamentos/update/(:num)', 'Agendamentos::update/$1');
$routes->get('/agendamentos/delete/(:num)', 'Agendamentos::delete/$1');


//Pagamentos

$routes->get('/pagamentos', 'Pagamentos::index');
$routes->get('/pagamentos/create', 'Pagamentos::create');
$routes->post('/pagamentos/store', 'Pagamentos::store');
$routes->get('/pagamentos/edit/(:num)', 'Pagamentos::edit/$1');
$routes->post('/pagamentos/update/(:num)', 'Pagamentos::update/$1');
$routes->get('/pagamentos/delete/(:num)', 'Pagamentos::delete/$1');


//Histórico de serviços

$routes->get('/historicos', 'Historicos::index');
$routes->get('/historicos/create', 'Historicos::create');
$routes->post('/historicos/store', 'Historicos::store');
$routes->get('/historicos/edit/(:num)', 'Historicos::edit/$1');
$routes->post('/historicos/update/(:num)', 'Historicos::update/$1');
$routes->get('/historicos/delete/(:num)', 'Historicos::delete/$1');
