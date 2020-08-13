<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Rutas públicas
Route::get('/', 'MenuController@index')->name('index');
Route::post('/revisar', 'MenuController@revisar')->name('revisar');
Route::get('/domicilio', 'MenuController@domicilio')->name('domicilio');
Route::post('/ordenar', 'MenuController@ordenar')->name('ordenar');

//Rutas privadas
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Rutas para catálogo de platillos
Route::get('/platillos', 'PlatilloController@index')->name('platillo');
Route::get('/platillos/crear', 'PlatilloController@create')->name('agregarplatillo');
Route::post('/platillos/guardar', 'PlatilloController@store')->name('guardarplatillo');
Route::get('/platillos/editar/{id}', 'PlatilloController@edit')->name('editarplatillo');
Route::patch('/platillos/actualizar/{id}', 'PlatilloController@update')->name('actualizarplatillo');
Route::delete('/platillos/borrar/{id}', 'PlatilloController@destroy')->name('borrarplatillo');

Route::get('/negocio', 'NegocioController@index')->name('negocio');
Route::get('/cuenta', 'CuentaController@index')->name('cuenta');