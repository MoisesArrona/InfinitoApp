<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{

    public function index()
    {
        $empresas = Empresa::all();
        return view('empresa.index', compact('empresas'));
    }

    public function create()
    {
        $sugerencias = Empresa::all();
        return view('empresa.crear', compact('sugerencias'));
    }

    public function store(EmpresaRequest $request)
    {
        $empresa = new Empresa($request->input());
        $empresa->save();
        return redirect('empresa/')->with('estatus', 'Se guardo correctamente: '.$empresa->nombre);
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        $usuarios = User::where('id_empresa', '=', $id)->get();
        return view('empresa.mostrar', compact(['empresa', 'usuarios']));
    }

    public function edit(Empresa $empresa)
    {
        $sugerencias = Empresa::all();
        return view('empresa.editar', compact(['empresa', 'sugerencias']));
    }

    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->fill($request->all());
        $empresa->save();
        return redirect('empresa/'.$empresa->id)->with('estatus', 'Se edito correctamente: '.$empresa->nombre);
    }

    public function destroy(Empresa $empresa)
    {
        //
    }
}
