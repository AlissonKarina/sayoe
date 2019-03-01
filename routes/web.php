<?php

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
$router->group(['prefix'=>'api/v1'], function() use($router){
    // FACULTADES
    $router->get('/facultades', 'FacultadController@index');
    $router->post('/facultad', 'FacultadController@create');
    $router->get('/facultad/{id}', 'FacultadController@show');
    $router->put('/facultad/{id}', 'FacultadController@update');
    $router->delete('/facultad/{id}', 'FacultadController@destroy');

    //PERFILES UNAYOE
    $router->get('/unayoe-perfiles', 'UnayoePerfilController@index');
    $router->post('/unayoe-perfil', 'UnayoePerfilController@create');
    $router->get('/unayoe-perfil/{id}', 'UnayoePerfilController@show');
    $router->put('/unayoe-perfil/{id}', 'UnayoePerfilController@update');
    $router->delete('/unayoe-perfil/{id}', 'UnayoePerfilController@destroy');
});

$router->post('/login', ['uses' => 'UserController@getToken']);

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function (){
    return str_random(32);
});

Route::get('/users', ['uses' => 'UserController@index']);
$router->post('/users', ['uses' => 'UserController@create']);