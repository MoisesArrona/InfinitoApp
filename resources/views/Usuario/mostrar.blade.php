@extends('layouts.plantilla')

@section('title', 'Informacion sobre usuario')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/usuario" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <img src="/imagenes/usuarios/{{$usuario->foto}}" class="card-img-top" style="width: 200px;">
            <h6 class="m-0 font-weight-bold text-primary">{{$usuario->name}}</h6>
        </div>
        <div class="card-body">
            <p class="card-text">{{$usuario->email}}</p>
            <p class="card-text">{{$usuario->password}}</p>
            <p class="card-text">{{$usuario->descripcion}}</p>
            <p class="card-text">{{$usuario->id_rol}}</p>
        </div>
    </div>
@endsection