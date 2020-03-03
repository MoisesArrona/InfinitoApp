@extends('layouts.plantilla')

@section('contenido')
    <form action="/proveedor/{{$proveedor->id}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Empresa</label>
            <input class="form-control" type="text" value="{{$proveedor->empresa}}" name="empresa">
        </div>

        <div class="form-group">
            <label for="">Usuario</label>
            <input class="form-control" type="text" value="{{$proveedor->usuario}}" name="usuario" >
        </div>

        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" value="{{$proveedor->telefono}}" name="telefono">
        </div>

        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" value="{{$proveedor->correo}}" name="correo" >
        </div>

        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="url" value="{{$proveedor->web}}" name="web">
        </div>

        <div class="form-group">
            <label for="">domicilio</label>
            <input class="form-control" type="text" value="{{$proveedor->domicilio}}" name="domicilio" >
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection