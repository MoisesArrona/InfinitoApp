<?php

namespace App\Http\Controllers;

use App\Novedad;
use App\Http\Requests\NovedadRequest;
use Illuminate\Http\Request;

class NovedadController extends Controller
{

    public function index()
    {
        $novedades = Novedad::orderBy('id','DESC')->get();
        return view('novedad.index', compact('novedades'));
    }

    public function create()
    {
        return view('novedad.crear');
    }

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

    public function show(Novedad $novedad)
    {
        //
    }

    public function edit(Novedad $novedad)
    {
        return view('novedad.editar', compact('novedad'));
    }

    public function update(Request $request, Novedad $novedad)
    {
        //
    }

    public function destroy(Novedad $novedad)
    {
        //
    }
}
