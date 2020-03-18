@extends('layouts.plantilla')

@section('title', 'Dar de alta poveedor')

@section('contenido')
    <form action="/proveedor" method="post">
        @csrf
        <div class="form-group">
            <label for="">Empresa</label>
            <input class="form-control" type="text" value="{{old('empresa')}}" name="empresa">
            @error('empresa')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Contacto</label>
            <input class="form-control" type="text" value="{{old('contacto')}}" name="contacto" >
            @error('contacto')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Telefono</label>
            <input class="form-control" type="text" value="{{old('telefono')}}" name="telefono">
            @error('telefono')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Correo</label>
            <input class="form-control" type="text" value="{{old('correo')}}" name="correo" >
            @error('correo')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Web</label>
            <input class="form-control" type="url" value="{{old('web')}}" name="web">
            @error('web')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">domicilio</label>
            <input class="form-control" type="text" value="{{old('domicilio')}}" name="domicilio" >
            @error('domicilio')
                <code>{{$message}}</code>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection