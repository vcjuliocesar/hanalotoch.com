<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('menu.menu');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/negocio', 'NegocioController@index')->name('negocio');
Route::get('/cuenta', 'CuentaController@index')->name('cuenta');















// Route::group(['middleware' => 'auth'], function(){
//    Route::get('/usuarios', 'Controller@');
//    Route::get('/proyectos', 'Controller@');
//    Route::get('/config', 'Controller@');
//});