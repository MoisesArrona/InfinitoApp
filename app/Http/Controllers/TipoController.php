<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\TipoRequest;

class TipoController extends Controller
{

    public function index()
    {
        $tipos = Tipo::all();
        return view('tipo.index', compact('tipos'));
    }

    public function create()
    {
        $sugerencias = Tipo::all();
        return view('tipo.crear', compact('sugerencias'));
    }

    public function store(TipoRequest $request)
    {
        $tipo = new Tipo($request->input());
        $tipo->save();
        return redirect('tipo/')->with('estatus', 'Se guardo correctamente: '.$tipo->nombre);
    }

    public function show($id)
    {
        $tipo = Tipo::find($id);
        return view('tipo.mostrar', compact('tipo'));
    }

    public function edit(Tipo $tipo)
    {
        $sugerencias = Tipo::all();
        return view('tipo/editar', compact(['tipo', 'sugerencias']));
    }

    public function update(TipoRequest $request, Tipo $tipo)
    {
        /*$tipo = request()->except('_method', '_token');
        Tipo::where('id','=',$id)->update($tipo);*/
        $tipo->fill($request->all());
        $tipo->save();
        return redirect('tipo/'.$tipo->id)->with('estatus', 'Se edito correctamente: '.$tipo->nombre);
    }

    public function destroy(Tipo $tipo)
    {
        //
    }
}
