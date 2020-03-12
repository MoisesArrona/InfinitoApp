@extends('layouts.plantilla')

@section('title', 'Informacion sobre producto')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/producto" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <img src="/imagenes/productos/{{$producto->foto}}" class="card-img-top" style="width: 200px;">
            <h6 class="m-0 font-weight-bold text-primary">{{$producto->codigo}}</h6>
        </div>
        <div class="card-body">
            <p class="card-text">{{$producto->modelo}}</p>
            <p class="card-text">{{$producto->nombre}}</p>
            <p class="card-text">{{$producto->existencia}}</p>
            <p class="card-text">{{$producto->id_proveedor}}</p>
            <p class="card-text">{{$producto->id_tipo}}</p>
        </div>
    </div>
@endsection