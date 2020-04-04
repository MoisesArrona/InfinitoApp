@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')


    <div class="row">
        <!-- Acceso a empresa -->
        <div class="col-md-6">
            <a href="/empresa/" class="card card-stats card-round btn">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-suitcase text-warning"></i>
                            </div>
                        </div>
                        <div class="col col-stats">
                            <div class="numbers">
                                <p class="card-category">Empresas</p>
                                <h4 class="card-title">Administra</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="/roles/" class="card card-stats card-round btn">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface text-warning"></i>
                            </div>
                        </div>
                        <div class="col col-stats">
                            <div class="numbers">
                                <p class="card-category">Roles de usuario</p>
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
                    <h4 class="card-title text-center">Listado de tipo de usuarios</h4>
                    <a href="usuario/create" class="btn btn-primary float-right">
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
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Empresa</th>
                                    <th>Foto</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Empresa</th>
                                    <th>Foto</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>{{$usuario->roles->nombre}}</td>
                                        <td>{{$usuario->empresas}}</td>
                                        <td>
                                            <div class="avatar avatar-sm">
                                                <img src="/imagenes/usuarios/{{$usuario->foto}}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="usuario/{{$usuario->id}}/" class=" btn btn-link btn-primary">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="usuario/{{$usuario->id}}/edit" class="btn btn-link btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
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