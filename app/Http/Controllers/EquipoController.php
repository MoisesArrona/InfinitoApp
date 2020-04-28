<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EquipoRequest;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipo.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sugerencias = Equipo::all();
        return view('equipo.crear', compact('sugerencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoRequest $request)
    {
        /*$equipo = request()->except('_token');
        Equipo::insert($equipo);*/
        $equipo = new Equipo($request->input());
        $equipo->save();
        return redirect('equipo/')->with('estatus', 'Se guardo correctamente el equipo: '.$equipo->equipo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('equipo.mostrar', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipo $equipo)
    {
        /*$usuario = User::all();*/
        return view('equipo/editar', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(EquipoRequest $request, Equipo $equipo)
    {
        $equipo->fill($request->all());
        $equipo->save();
        return redirect('equipo/'.$equipo->id)->with('estatus', 'Se edito correctamente el equipo: '.$equipo->equipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
