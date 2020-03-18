@extends('layouts.plantilla')

@section('title', 'Tipo de material')

@section('contenido')
    @include('mensajes.satisfactorio')

    <!--Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/tipo/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>

        <a href="/producto/" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-box"></i>
            </span>
            <span class="text">Productos</span>
        </a>
    </div>

    <div class="div">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Listado de tipo de materiales</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipos as $tipo)
                                <tr>
                                    <td>{{$tipo->nombre}}</td>
                                    <td>{{$tipo->descripcion}}</td>
                                    <td>
                                        <a href="/tipo/{{$tipo->id}}/" class="btn btn-info btn-circle">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="/tipo/{{$tipo->id}}/edit" class="btn btn-warning btn-circle">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="">
        @foreach ($tipos as $tipo)
            <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{$tipo->nombre}}</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Opciones:</div>
                                <a class="dropdown-item" href="tipo/{{$tipo->id}}/edit">Editar</a>
                                <a class="dropdown-item" href="tipo/{{$tipo->id}}/">Ver</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{$tipo->descripcion}}
                    </div>
                </div>
            </div>
        @endforeach  
    </div>  -->
    
@endsection