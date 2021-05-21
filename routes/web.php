<?php

use Illuminate\Support\Facades\Route;

//Redirecciona al login de la aplicación como raíz
Auth::routes(['register' => false]);

//Login
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

//Proteger rutas a nivel de rol por middleware
Route::middleware(['administrador'])->group(function () {
    Route::get('/administrador', 'HomeController@administrador');
    
    Route::resource('/tipo', 'TipoController');

    Route::resource('/proveedor', 'ProveedorController');

    Route::resource('/producto', 'ProductoController');

    Route::resource('/equipo', 'EquipoController');

    Route::resource('/empresa', 'EmpresaController');

    Route::resource('/tarea', 'TareaController');

    Route::resource('/reporte', 'ReporteController');

    Route::resource('/empresa', 'EmpresaController');

    Route::resource('/usuario', 'UserController');

    Route::resource('/novedad', 'NovedadController');
});

Route::middleware(['personal'])->group(function () {
    Route::get('/personal', 'HomeController@personal');

    Route::resource('/tarea', 'TareaController');

    Route::resource('/novedad', 'NovedadController');

    Route::resource('/reporte', 'ReporteController')->except([
        'create', 'store'
    ]);
});

Route::middleware(['cliente'])->group(function () {
    Route::get('/cliente', 'HomeController@cliente');

    Route::resource('/reporte', 'ReporteController')->except([
        'edit', 'update'
    ]);

    Route::resource('/novedad', 'NovedadController')->only([
        'index'
    ]);
});