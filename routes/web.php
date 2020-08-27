<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Rutas públicas
Route::get('/', 'PublicMenuController@index');
Route::post('/ordenar', 'PublicMenuController@ordenar');

//Rutas privadas
Auth::routes();
Route::get('/home', 'HomeController@index');


Route::post('/negocio/guardar', 'NegocioController@store');
//Route::patch('/negocio/editar/{id}', 'NegocioController@edit');

//Rutas para catalogo de platillos
Route::get('/platillos', 'PlatilloController@index');
Route::get('/platillos/crear', 'PlatilloController@create');
Route::post('/platillos/guardar', 'PlatilloController@store');
Route::get('/platillos/editar/{id}', 'PlatilloController@edit');
Route::patch('/platillos/actualizar/{id}', 'PlatilloController@update');
Route::patch('/platillos/activar/{id}', 'PlatilloController@enable');
Route::patch('/platillos/desactivar/{id}', 'PlatilloController@disable');
Route::delete('/platillos/borrar/{id}', 'PlatilloController@destroy');


//Rutas para catálogo de menus
Route::get('/menus', 'MenuController@index');
Route::get('/menus/crear', 'MenuController@create');
Route::post('/menus/guardar', 'MenuController@store');
Route::get('/menus/editar/{id}', 'MenuController@edit');
Route::patch('/menus/actualizar/{id}', 'MenuController@update');
Route::patch('/menus/activar/{id}', 'MenuController@enable');
Route::patch('/menus/desactivar/{id}', 'MenuController@disable');
Route::delete('/menus/borrar/{id}', 'MenuController@destroy');
Route::get('/menus/asignar/{id}', 'MenuController@assign');


//Rutas para datos de negocio
Route::get('/negocio', 'NegocioController@index');
Route::get('/negocio/editar', 'NegocioController@edit');

