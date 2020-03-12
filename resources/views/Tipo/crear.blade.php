@extends('layouts.plantilla')

@section('title', 'Dar de alta tipo')

@section('contenido')
    <form action="/tipo" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control form-control-user" type="text" name="nombre" required>
        </div>
        
        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" name="descripcion" required>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection