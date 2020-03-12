@extends('layouts.plantilla')

@section('title', 'Dar de alta equipo')

@section('contenido')
    <form action="/equipo" method="post">
        @csrf
        <div class="form-group">
            <label for="">Equipo</label>
            <input class="form-control" type="text" name="equipo">
        </div>
        <div class="form-group">
            <label for="">Contacto</label>
            <input class="form-control" type="text" name="contacto" >
        </div>
        <div class="form-group">
            <label for="">Modelo</label>
            <input class="form-control" type="text" name="modelo">
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre" >
        </div>
        <div class="form-group">
            <label for="">SO</label>
            <input class="form-control" type="text" name="so">
        </div>
        <div class="form-group">
            <label for="">Procesador</label>
            <input class="form-control" type="text" name="procesador" >
        </div>
        <div class="form-group">
            <label for="">Ram</label>
            <input class="form-control" type="text" name="ram" >
        </div>
        <div class="form-group">
            <label for="">Dominio</label>
            <input class="form-control" type="text" name="dominio">
        </div>
        <div class="form-group">
            <label for="">IPV4</label>
            <input class="form-control" type="text" name="ipv4" >
        </div>
        <div class="form-group">
            <label for="">Puerto</label>
            <input class="form-control" type="text" name="puerto" >
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <input class="form-control" type="text" name="usuario">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input class="form-control" type="text" name="contraseña" >
        </div>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection