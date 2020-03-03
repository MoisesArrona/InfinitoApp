@extends('layouts.plantilla')

@section('contenido')
    <div class="col-sm">
        <div class="card bg-light">
            <div class="card-header">{{$tipo->nombre}}</div>
            <div class="card-body">
            <h5 class="card-title">Informaciòn</h5>
            <p class="card-text">{{$tipo->descripcion}}</p>
            </div>
        </div>
    </div>
@endsection