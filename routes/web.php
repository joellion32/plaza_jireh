<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rutas para la tienda
Route::get('/', 'TiendaController@index')->name('plaza');
Route::get('/categoria/{id}', 'TiendaController@vercategoria');
Route::get('/producto_detalle/{id}', 'TiendaController@detalle');



// rutas para el administrador
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
