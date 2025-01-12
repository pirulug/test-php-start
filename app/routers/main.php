<?php

// Home
$router->get('', 'HomeController@index');
$router->get('contacto', 'HomeController@contacto');
$router->get('precio', 'HomeController@pricing');

// Login
$router->get('login', 'AuthController@login')
  ->middleware('AuthMiddleware::isLogged');
$router->post('login', 'AuthController@login')
  ->middleware('AuthMiddleware::isLogged');

// Dashboard
$router->get("dashboard", "DashboardController@index");

// Usuarios
$router->get('users', 'UserController@list')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');
$router->get('user/add', 'UserController@add')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');
$router->post('user/add', 'UserController@add')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');
$router->get('user/edit/{id}', 'UserController@edit')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');
$router->post('user/edit/{id}', 'UserController@edit')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');
$router->get('user/delete/{id}', 'UserController@delete')
  ->middleware('UserMiddleware::isAdmin')
  ->middleware('UserMiddleware::isLogged');