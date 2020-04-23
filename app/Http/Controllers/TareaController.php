<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use App\Mail\TareaMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareasI = Tarea::where('estatus','!=','finalizado')->get();
        $tareasT = Tarea::where('estatus','=','finalizado')->whereMonth('created_at', Carbon::now()->startOfMonth())->get();
        $tareas = Tarea::all();
        return view('tarea.index', compact(['tareasI', 'tareasT', 'tareas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::where('id_rol','=',2)->get();
        return view('tarea.crear', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TareaRequest $request)
    {
        /*$tarea = request()->except('_token');
        Tarea::insert($tarea);*/
        $tarea = new Tarea($request->input());
        $tarea->save();
        Mail::to(auth()->user()->email)->send(new TareaMail($tarea));
        $usuario = User::find($tarea->id_usuario);
        Mail::to($usuario->email)->send(new TareaMail($tarea));
        return redirect('tarea/')->with('estatus', 'Se a iniciado la tarea: '.$tarea->nombre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
        return view('tarea.mostrar', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $usuarios = User::where('id_rol','=',2)->get();
        return view('tarea/editar', compact(['tarea', 'usuarios']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        /*$tarea = request()->except('_method', '_token');
        Tarea::where('id','=',$id)->update($tarea);*/
        $tarea->fill($request->all());
        $tarea->save();
        Mail::to(auth()->user()->email)->send(new TareaMail($tarea));
        $usuario = User::find($tarea->id_usuario);
        Mail::to($usuario->email)->send(new TareaMail($tarea));
        return redirect('tarea/')->with('estatus', 'Se cambio el estatus de la tarea: :'.$tarea->nombre. ' a: '.$tarea->estatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
