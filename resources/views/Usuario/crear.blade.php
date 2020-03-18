@extends('layouts.plantilla')

@section('title', 'Dar de alta usuario')

@section('contenido')
    <form action="/usuario" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control form-control-user" type="text" name="name">
        </div>
        
        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" name="email" >
        </div>

        <div class="form-group">
            <label for="">Contraseña</label>
            <input class="form-control" type="text" name="password" >
        </div>

        <div class="custom-file">
            <input class="custom-file-input" type="file" name="foto">
            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" name="descripcion" >
        </div>

        <label for="">Rol</label>
        <select name="id_rol" class="form-control form-control-lg">
            @foreach ($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->nombre}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection