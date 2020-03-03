@extends('layouts.plantilla')

@section('contenido')
    <div class="col-sm">
        <div class="card bg-light">
            <div class="card-header">{{$proveedor->empresa}}</div>
            <div class="card-body">
                <h5 class="card-title">Informaciòn</h5>
                <p class="card-text">{{$proveedor->usuario}}</p>
                <p class="card-text">{{$proveedor->telefono}}</p>
                <p class="card-text">{{$proveedor->correo}}</p>
                <p class="card-text">{{$proveedor->web}}</p>
                <p class="card-text">{{$proveedor->domicilio}}</p>
            </div>
        </div>
    </div>
@endsection