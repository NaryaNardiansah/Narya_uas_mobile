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

$router->group(['prefix' => 'api/perpustakaan'], function () use ($router) {
    $router->get('/', 'PerpustakaanController@index');         // Get all
    $router->get('{no}', 'PerpustakaanController@show');       // Get by ID
    $router->post('/', 'PerpustakaanController@store');        // Create
    $router->put('{no}', 'PerpustakaanController@update');     // Update
    $router->delete('{no}', 'PerpustakaanController@destroy'); // Delete
});