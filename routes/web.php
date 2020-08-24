<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Rutas públicas
Route::get('/', 'PublicMenuController@index');
Route::post('/ordenar', 'PublicMenuController@ordenar');

//Rutas privadas
Auth::routes();
Route::get('/home', 'HomeController@index');

//

//Route::get('/platillos/editar/{id}', 'PlatilloController@edit')->name('editarplatillo');
//Route::patch('/platillos/actualizar/{id}', 'PlatilloController@update')->name('actualizarplatillo');
//Route::delete('/platillos/borrar', 'PlatilloController@destroy')->name('borrarplatillo');
//Route::delete('/platillos/borrar/{id}', 'PlatilloController@destroy')->name('borrarplatillo');

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
Route::get('/menus/editar', 'MenuController@edit');


//Rutas para datos de negocio
Route::get('/negocio', 'NegocioController@index');


Route::get('/cuenta', 'CuentaController@index');

//Rutas para datos del usuario

