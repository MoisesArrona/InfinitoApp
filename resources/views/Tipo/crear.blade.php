@extends('layouts.plantilla')

@section('title', 'Dar de alta tipo')

@section('contenido')
    <form action="/tipo" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control form-control-user" type="text" value="{{old('nombre')}}" name="nombre">
            @error('nombre')
                <code>{{$message}}</code>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" value="{{old('descripcion')}}" name="descripcion">
            @error('descripcion')
                <code>{{$message}}</code>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>

    @include('mensajes.error')
@endsection