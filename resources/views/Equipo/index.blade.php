@extends('layouts.plantilla')

@section('title', 'Equipo')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <!-- Tabla -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Listado de tipo de equipos</h4>
                    <a href="/equipo/create" class="btn btn-primary float-right">
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
                                    <th>Equipo</th>
                                    <th>Modelo</th>
                                    <th>Nombre</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Equipo</th>
                                    <th>Modelo</th>
                                    <th>Nombre</th>
                                    <th style="width: 10%">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($equipos as $equipo)
                                    <tr>
                                        <td>{{$equipo->equipo}}</td>
                                        <td>{{$equipo->modelo}}</td>
                                        <td>{{$equipo->nombre}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="/equipo/{{$equipo->id}}/" class="btn btn-link btn-primary">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="/equipo/{{$equipo->id}}/edit" class="btn btn-link btn-warning">
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
