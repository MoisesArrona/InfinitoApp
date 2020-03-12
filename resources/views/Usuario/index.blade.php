@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('contenido')
    @include('mensajes.satisfactorio')
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="usuario/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>
    </div>

    <div class="row">
        @foreach ($usuarios as $usuario)
            <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <img src="/imagenes/usuarios/{{$usuario->foto}}" class="card-img-top" style="width: 100px;">
                        <h6 class="m-0 font-weight-bold text-primary">{{$usuario->name}}</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Opciones:</div>
                                <a class="dropdown-item" href="usuario/{{$usuario->id}}/edit">Editar</a>
                                <a class="dropdown-item" href="usuario/{{$usuario->id}}/">Ver</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="card-text">{{$usuario->email}}</p>
                        <p class="card-text">{{$usuario->id_rol}}</p>
                    </div>
                </div>
            </div>
        @endforeach  
    </div> 

@endsection