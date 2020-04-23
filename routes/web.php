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
Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('auth.login');
});

/*Proteger rutas a nivel de rol por middleware*/
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'administrador'], function () {
        Route::get('/administrador', 'HomeController@administrador');
        
        Route::resource('/tipo', 'TipoController');
        
        Route::resource('/proveedor', 'ProveedorController');
        
        Route::resource('/producto', 'ProductoController');
        
        Route::resource('/equipo', 'EquipoController');
                    
        Route::resource('/empresa', 'EmpresaController');
        
        Route::resource('/usuario', 'UserController');
    });
    
    Route::group(['middleware' => 'personal'], function () {
        Route::get('/personal', 'HomeController@personal');    
    });

    Route::group(['middleware' => 'cliente'], function () {
        Route::get('/cliente', 'HomeController@cliente');

        Route::resource('/reporte', 'ReporteController', [
            'only' => ['show','create']
        ]);

        Route::resource('/reporte', 'ReporteController', [
            'except' => ['index', 'show', 'edit']
        ]);
    });

    Route::group(['middleware' => ['administrador' || 'personal']], function(){
        Route::resource('/tarea', 'TareaController');

        Route::resource('/reporte', 'ReporteController', [
            'only' => ['edit', 'index', 'show']
        ]);
    });
});