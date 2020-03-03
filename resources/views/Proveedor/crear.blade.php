@extends('layouts.plantilla')

@section('contenido')
    <form action="/proveedor" method="post">
        @csrf
        <div class="form-group">
            <label for="">Empresa</label>
            <input class="form-control" type="text" name="empresa">
        </div>

        <div class="form-group">
            <label for="">Usuario</label>
            <input class="form-control" type="text" name="usuario" >
        </div>

        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="telefono">
        </div>

        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" name="correo" >
        </div>

        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="url" name="web">
        </div>

        <div class="form-group">
            <label for="">domicilio</label>
            <input class="form-control" type="text" name="domicilio" >
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection