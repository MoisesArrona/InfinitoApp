@extends('layouts.plantilla')

@section('title', 'Informacion sobre proveedor')

@section('contenido')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/proveedor" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$proveedor->empresa}}</h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Informaciòn</h5>
                <p class="card-text">{{$proveedor->usuario}}</p>
                <p class="card-text">{{$proveedor->telefono}}</p>
                <p class="card-text">{{$proveedor->correo}}</p>
                <p class="card-text">{{$proveedor->web}}</p>
                <p class="card-text">{{$proveedor->domicilio}}</p>
        </div>
    </div>
@endsection