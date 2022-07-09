<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//api routes
$router->get('/api/articulos', 'ArticuloController@index');
$router->post('/api/articulos', 'ArticuloController@store');
$router->put('/api/articulos/{id}', 'ArticuloController@update');
$router->delete('/api/articulos/{id}', 'ArticuloController@destroy');