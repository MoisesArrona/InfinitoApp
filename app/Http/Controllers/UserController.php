<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use App\Empresa;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
use App\Reporte;
use App\Tarea;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::where('id_rol', '=', 3)->get();
        return view('usuario.index', compact('usuarios'));
    }

    public function create()
    {
        $usuarios = User::all();
        $roles = Rol::all();
        $empresas = Empresa::all();
        return view('usuario.crear', compact(['roles', 'empresas', 'usuarios']));
    }

    public function store(UsuarioRequest $request)
    {
        $usuario = new User($request->input());
        //Condicionamos para saber si existe una foto en la peticion
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->email.'_'.now().'.png';
            $file->move(public_path().'/imagenes/usuarios/',$name);
            $usuario->foto = $name;
        }
        $usuario->password = Hash::make($request->input('password'));
        $usuario->save();
        return redirect('usuario/')->with('estatus', 'Se guardo correctamente');
    }

    public function show($id)
    {
        $usuario = User::find($id);
        $reportes = Reporte::where('id_usuario','=',$id)->get();
        $tareas = Tarea::where('id_usuario','=',$id)->get();
        return view('usuario.mostrar', compact(['usuario', 'reportes', 'tareas']));
    }

    public function edit(User $usuario)
    {
        $usuarios = User::all();
        $roles = Rol::all();
        $empresas = Empresa::all();
        return view('usuario.editar', compact(['roles', 'usuario', 'empresas', 'usuarios']));
    }

    public function update(UsuarioRequest $request, User $usuario)
    {
        $usuario->fill($request->all());
        //Condicionamos para saber si existe una foto en la peticion
        if($request->hasFile('foto')){
            //asiganmos la foto a la variable y cambiamos el nombre y movemos el archivo
            $file = $request->file('foto');
            $name = $request->email.'_'.now().'.png';
            $usuario['foto'] = $name;
            $file->move(public_path().'/imagenes/usuarios/',$name);
        }
        $usuario['password'] = Hash::make($request->input('password'));
        $usuario->save();
        return redirect('usuario/'.$usuario->id)->with('estatus', 'Se edito correctamente');
    }

    public function destroy($id)
    {
        //
    }
}
