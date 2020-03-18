@extends('layouts.plantilla')

@section('title', 'Editar equipo')

@section('contenido')
    <form action="/equipo/{{$equipo->id}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Equipo</label>
            <input class="form-control" type="text" value="{{$equipo->equipo}}" name="equipo">
        </div>
        <div class="form-group">
            <label for="">Modelo</label>
            <input class="form-control" type="text" value="{{$equipo->modelo}}" name="modelo">
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" value="{{$equipo->nombre}}" name="nombre" >
        </div>
        <div class="form-group">
            <label for="">SO</label>
            <input class="form-control" type="text" value="{{$equipo->so}}" name="so">
        </div>
        <div class="form-group">
            <label for="">Procesador</label>
            <input class="form-control" type="text" value="{{$equipo->procesador}}" name="procesador" >
        </div>
        <div class="form-group">
            <label for="">Ram</label>
            <input class="form-control" type="text" value="{{$equipo->ram}}" name="ram" >
        </div>
        <div class="form-group">
            <label for="">Dominio</label>
            <input class="form-control" type="text" value="{{$equipo->dominio}}" name="dominio">
        </div>
        <div class="form-group">
            <label for="">IPV4</label>
            <input class="form-control" type="text" value="{{$equipo->ipv4}}" name="ipv4" >
        </div>
        <div class="form-group">
            <label for="">Puerto</label>
            <input class="form-control" type="text" value="{{$equipo->puerto}}" name="puerto" >
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <input class="form-control" type="text" value="{{$equipo->usuario}}" name="usuario">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input class="form-control" type="text" value="{{$equipo->contraseña}}" name="contraseña" >
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection