@extends('layouts.plantilla')

@section('title', 'Editar tipo')

@section('contenido')
    <form action="/tipo/{{$tipo->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" value="{{$tipo->nombre}}" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" value="{{$tipo->descripcion}}" name="descripcion" >
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection