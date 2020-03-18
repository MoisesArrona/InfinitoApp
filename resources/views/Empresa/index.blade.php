@extends('layouts.plantilla')

@section('title', 'Empresas')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="empresa/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>
    </div>

    <div class="row">

        @foreach ($empresas as $empresa)
            <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{$empresa->nombre}}</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Opciones:</div>
                                <a class="dropdown-item" href="empresa/{{$empresa->id}}/edit">Editar</a>
                                <a class="dropdown-item" href="empresa/{{$empresa->id}}/">Ver</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title">Informaciòn</h5>
                        <p class="card-text">{{$empresa->telefono}}</p>
                        <p class="card-text">{{$empresa->correo}}</p>
                        <p class="card-text">{{$empresa->web}}</p>
                        <p class="card-text">{{$empresa->domicilio}}</p>
                    </div>
                </div>
            </div>
        @endforeach  
    </div> 
    
@endsection