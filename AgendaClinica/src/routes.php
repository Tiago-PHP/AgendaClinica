<?php
use core\Router;

$router = new Router();

// Rota inicial lista  os produtos na Home
$router->get('/', 'HomeController@index');


//Rotas para criar um novo agendamento
$router->get('/novo', 'AgendamentoController@create');
$router->post('/novo', 'AgendamentoController@createAction');

// Rotas para editar um agendamento existente
$router->get('/agendamento/{id}/edit', 'AgendamentoController@edit');
$router->post('/agendamento/{id}/edit', 'AgendamentoController@editAction');

// Rotas para deletar um agendamento pelo ID
$router->get('/agendamento/{id}/delete', 'AgendamentoController@delete');

