@extends('layouts.plantilla')

@section('contenido')
    <a class="btn btn-primary" href="/proveedor/create">Crear</a>
    <div class="row">
        @foreach ($proveedores as $proveedor)
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
                    <div class="card-footer">
                        <a class="btn btn-warning" href="/proveedor/{{$proveedor->id}}/edit">Editar</a>
                        <a class="btn btn-primary" href="/proveedor/{{$proveedor->id}}/">Mostrar</a>
                    </div>
                </div>
            </div>
        @endforeach  
    </div>  
@endsection