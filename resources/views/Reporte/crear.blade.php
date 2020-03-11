@extends('layouts.plantilla')

@section('title', 'Dar de alta reporte')

@section('contenido')
    <form action="/reporte" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" name="descripcion" >
        </div>

        <div class="custom-file">
            <input class="custom-file-input" type="file" name="foto">
            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
        </div>

        <div class="form-group">
            <label for="">Acceso remoto</label>
            <input class="form-control" type="text" name="remoto" >
        </div>

        <div class="form-group">
            <label for="">Id Remoto</label>
            <input class="form-control" type="text" name="remoto_id">
        </div>

        <div class="form-group">
            <label for="">Contraseña remoto</label>
            <input class="form-control" type="text" name="remoto_pass" >
        </div>

        <div class="form-group">
            <label for="">Estatus</label>
            <input class="form-control" type="text" name="estatus" value="1" >
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection