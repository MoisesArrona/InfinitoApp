@extends('layouts.plantilla')

@section('title', 'Tickets')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        @if (auth()->user()->id_rol == 3)
            <a href="reporte/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
                </span>
                <span class="text">Agregar</span>
            </a>
        @endif
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-">
                    <h4 class="card-title">Listado de tickets</h4>
                    <p>Los ticket que han finalizado solo se muestran en el mes actual</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                                    <i class="flaticon-multimedia-1"></i>
                                    Pendientes
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                                    <i class="flaticon-multimedia-2"></i>
                                    Finalizadas
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-todo-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                                    <i class="flaticon-search-2"></i>
                                    Todo
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-with-icon-tabContent">
                                <!--Tickets pendientes -->
                                <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                    <div class="row">
                                        @foreach ($reportesI as $reporte)
                                            <div class="col-md-4">
                                                <div class="card card-stats @if($reporte->estatus == 'inicio') card-danger @elseif($reporte->estatus == 'proceso') card-warning @endif card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">{{$reporte->nombre}}</h4>
                                                                    <p class="card-category">Descripción: {{$reporte->descripcion}}</p>
                                                                    <p class="card-category">Estatus: {{$reporte->estatus}}</p>
                                                                    <p class="card-category">Cliente: {{$reporte->cliente->name}}</p>
                                                                    <div class="btn-group dropdown">
                                                                        <button type="button" class="btn btn-secundary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                            <span class="btn-label">
                                                                                <i class="fa fa-cog"></i>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li>
                                                                                <p class="dropdown-item">Opciones</p>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="reporte/{{$reporte->id}}/edit">Atender reporte</a>
                                                                                <a class="dropdown-item" href="reporte/{{$reporte->id}}/">Ver</a>
                                                                            </li>
                                                                        </ul> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--Ticket finalizados-->
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <div class="row">
                                        @foreach ($reportesT as $reporte)
                                            <div class="col-md-4">
                                                <div class="card card-stats @if($reporte->estatus == 'inicio') card-danger @elseif($reporte->estatus == 'proceso') card-warning @endif card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">{{$reporte->nombre}}</h4>
                                                                    <p class="card-category">Descripción: {{$reporte->descripcion}}</p>
                                                                    <p class="card-category">Estatus: {{$reporte->estatus}}</p>
                                                                    <p class="card-category">Cliente: {{$reporte->cliente->name}}</p>
                                                                    <div class="btn-group dropdown">
                                                                        <button type="button" class="btn btn-secundary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                            <span class="btn-label">
                                                                                <i class="fa fa-cog"></i>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li>
                                                                                <p class="dropdown-item">Opciones</p>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="reporte/{{$reporte->id}}/">Ver</a>
                                                                            </li>
                                                                        </ul> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--Todas los tickets-->
                                <div class="tab-pane fade" id="v-pills-todo-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title text-center">Listado de todos los tickets finalizados</h4>
                                                </div>
                                                
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Descripcion</th>
                                                                    <th>Estatus</th>
                                                                    <th>Usuario</th>
                                                                    <th style="width: 10%">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Descripcion</th>
                                                                    <th>Estatus</th>
                                                                    <th>Usuario</th>
                                                                    <th style="width: 10%">Acciones</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                @foreach ($reportes as $reporte)
                                                                    <tr>
                                                                        <td>{{$reporte->nombre}}</td>
                                                                        <td>{{$reporte->descripcion}}</td>
                                                                        <td>{{$reporte->estatus}}</td>
                                                                        <td>{{$reporte->cliente->name}}</td>
                                                                        <td>
                                                                            <div class="form-button-action">
                                                                                @if ($reporte->estatus == 'finalizado')
                                                                                    <a href="/reporte/{{$reporte->id}}/" class="btn btn-link btn-primary">
                                                                                        <i class="fas fa-info-circle"></i>
                                                                                    </a>
                                                                                @elseif($reporte->estatus == 'inicio' || $reporte->estatus == 'proceso')
                                                                                    <a href="/reporte/{{$reporte->id}}/" class="btn btn-link btn-primary">
                                                                                        <i class="fas fa-info-circle"></i>
                                                                                    </a>
                                                                                    <a href="/reporte/{{$reporte->id}}/edit" class="btn btn-link btn-warning">
                                                                                        <i class="fas fa-pencil-alt"></i>
                                                                                    </a>
                                                                                @endif
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection