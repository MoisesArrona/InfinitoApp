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

/*Redirecciona al login de la aplicación como raíz*/
Route::get('/', function () {
    return view('auth.login');
});

/*Proteger rutas a nivel de rol por middleware*/
Route::middleware(['administrador'])->group(function(){
    /*Rutas para modulos del sistema
    acceso a todas las funciones de los controladores*/
    Route::resource('tipo', 'TipoController');

    Route::resource('proveedor', 'ProveedorController');

    Route::resource('producto', 'ProductoController');

    Route::resource('tarea', 'tareaController');

    Route::resource('equipo', 'EquipoController');

    Route::resource('reporte', 'ReporteController');

    Route::resource('usuario', 'UserController');

    Route::resource('empresa', 'EmpresaController');
});

/*Rutas para secciones extras
acceso a vistas*/

Route::view('/ayuda', 'extra.ayuda');

Route::view('/contacto', 'extra.contacto');

Route::view('/novedades', 'extra.novedades');

/*Login*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
