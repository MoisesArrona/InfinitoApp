@extends('layouts.plantilla')

@section('title', 'Productos')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')


    <div class="row">
        <!-- Acceso a tipo de producto -->
        <div class="col-md-6">
            <a href="/tipo/" class="card card-stats card-round btn">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-price-tag text-warning"></i>
                            </div>
                        </div>
                        <div class="col col-stats">
                            <div class="numbers">
                                <p class="card-category">Tipo de productos</p>
                                <h4 class="card-title">Administra</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-md-6">
            <a href="/proveedor/" class="card card-stats card-round btn">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-delivery-truck text-warning"></i>
                            </div>
                        </div>
                        <div class="col col-stats">
                            <div class="numbers">
                                <p class="card-category">Proveedores</p>
                                <h4 class="card-title">Administra</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Tabla -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Listado de tipo de productos</h4>
                    <a href="/producto/create" class="btn btn-primary float-right">
                        <span class="btn-label">
                            <i class="flaticon-add"></i>
                        </span>
                        Agregar
                    </a>
                    
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Modelo</th>
                                    <th>Existencia</th>
                                    <th>Foto</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Modelo</th>
                                    <th>Existencia</th>
                                    <th>Foto</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{$producto->nombre}}</td>
                                        <td>{{$producto->modelo}}</td>
                                        <td>{{$producto->existencia}}</td>
                                        <td>
                                            <div class="avatar avatar-sm">
                                                <img src="/imagenes/productos/{{$producto->foto}}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="producto/{{$producto->id}}/" class=" btn btn-link btn-primary">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="producto/{{$producto->id}}/edit" class="btn btn-link btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <a href="producto/" class="btn btn-link btn-success">
                                                    <i class="fas fa-plus"></i>
                                                </a>
                                                <a href="producto/{{$producto->id}}/salida" class="btn btn-link btn-danger">
                                                    <i class="fas fa-minus"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection