@extends('layouts.plantilla')

@section('contenido')
    <a class="btn btn-primary" class="btn btn-primary" href="equipo/create">Crear</a>
    <div class="row">
        @foreach ($equipos as $equipo)
            <div class="col-sm">
                <div class="card bg-light">
                    <div class="card-header">{{$equipo->equipo}}</div>
                    <div class="card-body">
                        <h5 class="card-title">Informaciòn</h5>
                        <p class="card-text">{{$equipo->contacto}}</p>
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
                    <div class="car-footer">
                        <a class="btn btn-warning" href="equipo/{{$equipo->id}}/edit">Editar</a>
                        <a class="btn btn-primary" href="equipo/{{$equipo->id}}/">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
