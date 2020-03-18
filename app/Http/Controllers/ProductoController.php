<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Tipo;
use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoGuardarRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $proveedores = Proveedor::all();
        return view('producto.crear', compact(['tipos', 'proveedores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoGuardarRequest $request)
    {
        $producto = new Producto($request->input());
        //Condicionamos para saber si existe una foto en la peticion
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->nombre.$request->codigo.$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/productos/',$name);
            $producto->foto = $name;
        }
        /*$producto = request()->except('_token');
        $producto['foto']=$name;
        Producto::create($producto);*/
        $producto->save();
        return redirect('producto/')->with('estatus', 'Se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto.mostrar', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $tipos = Tipo::all();
        $proveedores = Proveedor::all();
        return view('producto/editar', compact(['producto', 'tipos', 'proveedores']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //$producto = request()->except('_method', '_token', 'foto');
        $producto->fill($request->all());
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->nombre.$request->codigo.$file->getClientOriginalName();
            $producto['foto']=$name;
            $file->move(public_path().'/imagenes/productos/',$name);
        }
        $producto->save();
        return redirect('producto/'.$producto->id)->with('estatus', 'Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
