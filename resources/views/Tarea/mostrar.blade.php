@extends('layouts.plantilla')

@section('contenido')
    <div class="col-sm">
        <div class="card bg-light">
            <div class="card-header">{{$tarea->nombre}}</div>
            <div class="card-body">
            <h5 class="card-title">{{$tarea->estatus}}</h5>
            <p class="card-text">{{$tarea->descripcion}}</p>
            </div>
        </div>
    </div>
@endsection