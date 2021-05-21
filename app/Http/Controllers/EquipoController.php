<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EquipoRequest;

class EquipoController extends Controller
{

    public function index()
    {
        $equipos = Equipo::all();
        return view('equipo.index', compact('equipos'));
    }

    public function create()
    {
        $sugerencias = Equipo::all();
        return view('equipo.crear', compact('sugerencias'));
    }

    public function store(EquipoRequest $request)
    {
        /*$equipo = request()->except('_token');
        Equipo::insert($equipo);*/
        $equipo = new Equipo($request->input());
        $equipo->save();
        return redirect('equipo/')->with('estatus', 'Se guardo correctamente el equipo: '.$equipo->equipo);
    }

    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('equipo.mostrar', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        /*$usuario = User::all();*/
        return view('equipo/editar', compact('equipo'));
    }

    public function update(EquipoRequest $request, Equipo $equipo)
    {
        $equipo->fill($request->all());
        $equipo->save();
        return redirect('equipo/'.$equipo->id)->with('estatus', 'Se edito correctamente el equipo: '.$equipo->equipo);
    }

    public function destroy(Equipo $equipo)
    {
        //
    }
}
