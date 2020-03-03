@extends('layouts.plantilla')

@section('contenido')
<div class="col-sm">
    <div class="card">
        <img src="/imagenes/reportes/{{$reporte->foto}}" class="card-img-top" style="width: 400px;">
        <div class="card-body">
        <h5 class="card-title">{{$reporte->nombre}}</h5>
        <p class="card-text">{{$reporte->descripcion}}</p>
        <p class="card-text">{{$reporte->remoto}}</p>
        <p class="card-text">{{$reporte->remoto_id}}</p>
        <p class="card-text">{{$reporte->remoto_pass}}</p>
        </div>
    </div>
</div>
@endsection