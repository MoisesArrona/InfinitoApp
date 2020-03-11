@extends('layouts.plantilla')

@section('title', 'Productos')

@section('contenido')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="producto/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>
    </div>

    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <img src="/imagenes/productos/{{$producto->foto}}" class="card-img-top" style="width: 200px;">
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Opciones:</div>
                                <a class="dropdown-item" href="producto/{{$producto->id}}/edit">Editar</a>
                                <a class="dropdown-item" href="producto/{{$producto->id}}/">Ver</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h6 class="m-0 font-weight-bold text-primary">{{$producto->modelo}}</h6>
                        <p class="card-text">{{$producto->nombre}}</p>
                        <p class="card-text">{{$producto->existencia}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection