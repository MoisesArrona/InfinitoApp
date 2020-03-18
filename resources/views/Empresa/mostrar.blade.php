@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/empresa" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$empresa->nombre}}</h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Informaciòn</h5>
                <p class="card-text">{{$empresa->telefono}}</p>
                <p class="card-text">{{$empresa->correo}}</p>
                <p class="card-text">{{$empresa->web}}</p>
                <p class="card-text">{{$empresa->domicilio}}</p>
        </div>
    </div>
@endsection