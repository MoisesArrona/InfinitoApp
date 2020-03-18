@extends('layouts.plantilla')

@section('title', 'Información del equipo')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/equipo" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$equipo->equipo}}</h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Informaciòn</h5>
                <p class="card-text">{{$equipo->modelo}}</p>
                <p class="card-text">{{$equipo->nombre}}</p>
                <p class="card-text">{{$equipo->so}}</p>
                <p class="card-text">{{$equipo->procesador}}</p>
                <p class="card-text">{{$equipo->ram}}</p>
                <p class="card-text">{{$equipo->dominio}}</p>
                <p class="card-text">{{$equipo->ipv4}}</p>
                <p class="card-text">{{$equipo->puerto}}</p>
                <p class="card-text">{{$equipo->usuario}}</p>
                <p class="card-text">{{$equipo->contraseña}}</p>
        </div>
    </div>
@endsection