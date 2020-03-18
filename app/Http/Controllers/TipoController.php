<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\TipoGuardarRequest;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipo.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoGuardarRequest $request)
    {
        $validacion = 
        $tipo = new Tipo($request->input());
        $tipo->save();
        return redirect('tipo/')->with('estatus', 'Se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo = Tipo::find($id);
        return view('tipo.mostrar', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        return view('tipo/editar', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoGuardarRequest $request, Tipo $tipo)
    {
        /*$tipo = request()->except('_method', '_token');
        Tipo::where('id','=',$id)->update($tipo);*/
        $tipo->fill($request->all());
        $tipo->save();
        return redirect('tipo/'.$tipo->id)->with('estatus', 'Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        //
    }
}
