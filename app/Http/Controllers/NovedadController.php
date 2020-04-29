<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Http\Requests\NovedadRequest;
use Illuminate\Http\Request;

class NovedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novedades = Novedad::orderBy('id','DESC')->get();
        return view('novedad.index', compact('novedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novedad.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NovedadRequest $request)
    {
        $novedad = new Novedad($request->input());
        //Condicionamos para saber si existe una foto en la peticion
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->titulo.'_'.now().'.png';
            $file->move(public_path().'/imagenes/novedades/',$name);
            $novedad->foto = $name;
        }
        $novedad['id_usuario'] = auth()->user()->id;
        $novedad->save();
        return redirect('novedad/')->with('estatus', 'Se guardo correctamente: '.$novedad->titulo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function show(Novedad $novedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Novedad $novedad)
    {
        return view('novedad.editar', compact('novedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedad $novedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedad $novedad)
    {
        //
    }
}
