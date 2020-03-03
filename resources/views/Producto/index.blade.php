@extends('layouts.plantilla')

@section('contenido')
    <a class="btn btn-primary" href="producto/create">Crear</a>
    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-sm">
                <div class="card">
                    <img src="/imagenes/productos/{{$producto->foto}}" class="card-img-top" style="width: 400px;">
                    <div class="card-body">
                    <h5 class="card-title">{{$producto->codigo}}</h5>
                    <p class="card-text">{{$producto->modelo}}</p>
                    <p class="card-text">{{$producto->nombre}}</p>
                    <p class="card-text">{{$producto->existencia}}</p>
                    <p class="card-text">{{$producto->id_proveedor}}</p>
                    <p class="card-text">{{$producto->id_tipo}}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning" href="producto/{{$producto->id}}/edit">Editar</a>
                        <a class="btn btn-primary" href="producto/{{$producto->id}}/">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection