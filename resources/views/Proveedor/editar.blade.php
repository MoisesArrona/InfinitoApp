@extends('layouts.plantilla')

@section('title', 'Editar proveedor')

@section('contenido')
    <form action="/proveedor/{{$proveedor->id}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Empresa</label>
            <input class="form-control" type="text" value="{{$proveedor->empresa}}" name="empresa">
            @error('empresa')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Contacto</label>
            <input class="form-control" type="text" value="{{$proveedor->contacto}}" name="contacto" >
            @error('contacto')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" value="{{$proveedor->telefono}}" name="telefono">
            @error('telefono')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" value="{{$proveedor->correo}}" name="correo" >
            @error('correo')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="url" value="{{$proveedor->web}}" name="web">
            @error('web')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Domicilio</label>
            <input class="form-control" type="text" value="{{$proveedor->domicilio}}" name="domicilio" >
            @error('domicilio')
                <code>{{$mensaje}}</code>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection