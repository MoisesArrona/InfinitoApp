@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
    <form action="/empresa/{{$empresa->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" value="{{$empresa->nombre}}" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" value="{{$empresa->telefono}}" name="telefono" >
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" value="{{$empresa->correo}}" name="correo">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="text" value="{{$empresa->web}}" name="web" >
        </div>
        <div class="form-group">
            <label for="">Domicilio</label>
            <input class="form-control" type="text" value="{{$empresa->domicilio}}" name="domicilio">
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection