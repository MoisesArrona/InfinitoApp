@extends('layouts.plantilla')

@section('contenido')
    <a  class="btn btn-primary" href="tarea/create">Crear</a>
    <div class="row">
        @foreach ($tareas as $tarea)
            <div class="col-sm">
                <div class="card bg-light">
                    <div class="card-header">{{$tarea->nombre}}</div>
                    <div class="card-body">
                    <h5 class="card-title">{{$tarea->estatus}}</h5>
                    <p class="card-text">{{$tarea->descripcion}}</p>
                    <p class="card-text">{{$tarea->id_usuario}}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning" href="tarea/{{$tarea->id}}/edit">Editar</a>
                        <a class="btn btn-primary" href="tarea/{{$tarea->id}}/">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection