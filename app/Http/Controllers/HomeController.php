<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reporte;
use App\Tarea;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
