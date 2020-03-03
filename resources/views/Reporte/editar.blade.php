@extends('layouts.plantilla')

@section('contenido')
    <form action="/reporte/{{$reporte->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" value="{{$reporte->nombre}}" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" value="{{$reporte->descripcion}}" name="descripcion" >
        </div>

        <div class="custom-file">
            <input class="custom-file-input" type="file" name="foto">
            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
        </div>

        <div class="form-group">
            <label for="">Acceso remoto</label>
            <input class="form-control" type="text" value="{{$reporte->remoto}}" name="remoto" >
        </div>

        <div class="form-group">
            <label for="">Id Remoto</label>
            <input class="form-control" type="text" value="{{$reporte->remoto_id}}" name="remoto_id">
        </div>

        <div class="form-group">
            <label for="">Contraseña remoto</label>
            <input class="form-control" type="text" value="{{$reporte->remoto_pass}}" name="remoto_pass" >
        </div>

        <div class="form-group">
            <label for="">Estatus</label>
            <input class="form-control" type="text" value="{{$reporte->estatus}}" name="estatus" value="1" >
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection