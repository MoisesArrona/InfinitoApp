<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\TareaDetalle;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use App\Mail\TareaMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class TareaController extends Controller
{

    public function index()
    {
        $tareasI = Tarea::where('estatus','!=','finalizado')->get();
        $tareasT = Tarea::where('estatus','=','finalizado')->whereMonth('created_at', Carbon::now()->startOfMonth())->get();
        $tareas = Tarea::all();
        return view('tarea.index', compact(['tareasI', 'tareasT', 'tareas']));
    }

    public function create()
    {
        $usuarios = User::where('id_rol','=',2)->get();
        return view('tarea.crear', compact('usuarios'));
    }

    public function store(TareaRequest $request)
    {
        $tarea = new Tarea($request->input());
        $tarea->save();
        Mail::to(auth()->user()->email)->send(new TareaMail($tarea));
        $usuario = User::find($tarea->id_usuario);
        Mail::to($usuario->email)->send(new TareaMail($tarea));
        return redirect('tarea/')->with('estatus', 'Se a iniciado la tarea: '.$tarea->nombre);
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);
        $detalles = TareaDetalle::where('id_tarea', '=', $id)->get();
        $tareas = Tarea::where('estatus', '!=', 'finalizado')->take(5)->orderBy('id','DESC')->get();
        return view('tarea.mostrar', compact(['tarea', 'detalles', 'tareas']));
    }

    public function edit(Tarea $tarea)
    {
        $usuarios = User::where('id_rol','=',2)->get();
        return view('tarea/editar', compact(['tarea', 'usuarios']));
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->estatus = $request->input('estatus');
        $tarea->save();
        //Registro de detalle de tarea
        $detalle = new TareaDetalle();
        $detalle->observacion = $request->input('observacion');
        $detalle->id_usuario = auth()->user()->id;
        $detalle->id_tarea = $tarea->id;
        $detalle->save();
        Mail::to(auth()->user()->email)->send(new TareaMail($tarea));
        $usuario = User::find($tarea->id_usuario);
        Mail::to($usuario->email)->send(new TareaMail($tarea));
        return redirect('tarea/')->with('estatus', 'Se cambio el estatus de la tarea: :'.$tarea->nombre. ' a: '.$tarea->estatus);
    }
    
    public function destroy(Tarea $tarea)
    {
        //
    }
}
