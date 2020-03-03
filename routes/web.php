<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*Rutas para modulos del sistema
acceso a todas las funciones de los controladores*/
Route::resource('tipo', 'TipoController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('producto', 'ProductoController');

Route::resource('tarea', 'tareaController');

Route::resource('reporte', 'ReporteController');

Route::resource('equipo', 'EquipoController');

/*Rutas para secciones extras
acceso a vistas*/

Route::view('/ayuda', 'extra.ayuda');

Route::view('/contacto', 'extra.contacto');

Route::view('/novedades', 'extra.novedades');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
