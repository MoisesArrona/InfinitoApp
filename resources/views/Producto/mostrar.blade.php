@extends('layouts.plantilla')

@section('contenido')
    <div class="col-sm">
        <div class="card text-center" >
            <img src="/imagenes/productos/{{$producto->foto}}" class="card-img-top" style="width: 200px;">
            <div class="card-body">
              <h5 class="card-title">{{$producto->codigo}}</h5>
              <p class="card-text">{{$producto->modelo}}</p>
              <p class="card-text">{{$producto->nombre}}</p>
              <p class="card-text">{{$producto->existencia}}</p>
              <p class="card-text">{{$producto->id_proveedor}}</p>
              <p class="card-text">{{$producto->id_tipo}}</p>
            </div>
        </div>
    </div>
@endsection