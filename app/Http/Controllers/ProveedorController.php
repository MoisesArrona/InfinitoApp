<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    public function create()
    {
        $sugerencias = Proveedor::all();
        return view('proveedor.crear', compact('sugerencias'));
    }

    public function store(ProveedorRequest $request)
    {
        /*$proveedor = request()->except('_token');
        Proveedor::create($proveedor);*/
        $proveedor = new Proveedor($request->input());
        $proveedor->save();
        return redirect('proveedor/')->with('estatus', 'Se guardo correctamente: '.$proveedor->nombre);
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.mostrar', compact('proveedor'));
    }

    public function edit(Proveedor $proveedor)
    {
        $sugerencias = Proveedor::all();
        return view('proveedor.editar', compact(['proveedor', 'sugerencias']));
    }

    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        /*$proveedor = request()->except('_method', '_token');
        Proveedor::where('id','=',$id)->update($proveedor);*/
        $proveedor->fill($request->all());
        $proveedor->save();
        return redirect('proveedor/'.$proveedor->id)->with('estatus', 'Se edito correctamente: '.$proveedor->nombre);
    }

    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
