@extends('layouts.plantilla')

@section('contenido')
    <a class="btn btn-primary" href="tipo/create">Crear</a>
    <div class="row">
        @foreach ($tipos as $tipo)
            <div class="col-sm">
                <div class="card bg-light">
                    <div class="card-header">{{$tipo->nombre}}</div>
                    <div class="card-body">
                    <h5 class="card-title">Informaciòn</h5>
                    <p class="card-text">{{$tipo->descripcion}}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning" href="tipo/{{$tipo->id}}/edit">Editar</a>
                        <a class="btn btn-primary" href="tipo/{{$tipo->id}}/">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection