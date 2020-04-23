<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reporte;
use App\Tarea;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function administrador()
    {
        $usuarios = User::all();
        $reportes = Reporte::all();
        $tareas = Tarea::all();
        return view('/dashboards/administrador', compact(['usuarios', 'reportes', 'tareas']));
    }

    public function personal()
    {

        return view('/dashboards/personal');
    }

    public function cliente()
    {
        return view('/dashboards/cliente');
    }
}
