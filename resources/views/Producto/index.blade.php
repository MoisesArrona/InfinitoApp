@extends('layouts.plantilla')

@section('title', 'Productos')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="producto/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>
    </div>

    <div class="row">
        <!-- Acceso a tipo de producto -->
        <a href="/tipo" class="col-md-6 mb-4 nav-link">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tipo de producto</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Administrar tipo de producto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="/proveedor" class="col-md-6 mb-4 nav-link">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Proveedores</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Administra proveedores</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Add Row</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Add Row
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection