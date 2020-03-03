@extends('layouts.plantilla')

@section('contenido')
    <form action="/tarea" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">descripcion</label>
            <input class="form-control" type="text" name="descripcion" >
        
        </div>

        <div class="form-group">
            <label for="">estatus</label>
            <input class="form-control" type="text" name="estatus" value="1" >
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection