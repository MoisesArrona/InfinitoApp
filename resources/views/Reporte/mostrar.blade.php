@extends('layouts.plantilla')

@section('title', 'Informacion el reporte')

@section('contenido')
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
            <img src="/imagenes/reportes/{{$reporte->foto}}" class="card-img-top" style="width: 50%;">
            <h6 class="m-0 font-weight-bold text-primary">{{$reporte->nombre}}</h6>
        </div>
        <div class="card-body">
            <p class="card-text">{{$reporte->descripcion}}</p>
            <p class="card-text">{{$reporte->remoto}}</p>
            <p class="card-text">{{$reporte->remoto_id}}</p>
            <p class="card-text">{{$reporte->remoto_pass}}</p>
        </div>
    </div>
@endsection