<?php

/*use App\Http\Controllers\ProveedorController;
use App\Proveedor;*/
use Illuminate\Support\Facades\Route;

//Redirecciona al login de la aplicación como raíz
Auth::routes(['register' => false]);

//Login
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

//Proteger rutas a nivel de rol por middleware
Route::middleware(['auth'])->group(function () {
    Route::middleware(['administrador'])->group(function () {
        Route::get('/administrador', 'HomeController@administrador');
        
        Route::resource('/tipo', TipoController::class);
    
        Route::resource('/proveedor', ProveedorController::class);
    
        Route::resource('/producto', ProductoController::class);
    
        Route::resource('/equipo', EquipoController::class);
    
        Route::resource('/empresa', EmpresaController::class);
    
        Route::resource('/tarea', TareaController::class);
    
        Route::resource('/reporte', ReporteController::class);
    
        Route::resource('/empresa', EmpresaController::class);
    
        Route::resource('/usuario', UserController::class);
    
        Route::resource('/novedad', NovedadController::class);
    });
    
    Route::middleware(['personal'])->group(function () {
        Route::get('/personal', 'HomeController@personal');
    
        Route::resource('/tarea', TareaController::class);
    
        Route::resource('/novedad', NovedadController::class);
    
        Route::resource('/reporte', ReporteController::class)->except([
            'create', 'store'
        ]);
    });
    
    Route::middleware(['cliente'])->group(function () {
        Route::get('/cliente', 'HomeController@cliente');
    
        Route::resource('/reporte', ReporteController::class)->except([
            'edit', 'update'
        ]);
    
        Route::resource('/novedad', NovedadController::class)->only([
            'index'
        ]);
    });
});