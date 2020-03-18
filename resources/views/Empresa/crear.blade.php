@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
    <form action="/empresa" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="telefono" >
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" name="correo">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="text" name="web" >
        </div>
        <div class="form-group">
            <label for="">Domicilio</label>
            <input class="form-control" type="text" name="domicilio">
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection