@extends('layouts.plantilla')

@section('title', 'Informacion sobre tipo de material')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/tipo" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$tipo->nombre}}</h6>
        </div>
        <div class="card-body">
            {{$tipo->descripcion}}
        </div>
    </div>
@endsection