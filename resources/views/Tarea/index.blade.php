@extends('layouts.plantilla')

@section('title', 'Tareas')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/tarea/create" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">Agregar</span>
        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-">
                    <h4 class="card-title">Listado de tareas</h4>
                    <p>Las tareas que han finalizado solo se muestran en el mes actual</p>
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
                                <!--Tareas Pendientes-->
                                <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                    <div class="row">
                                        @foreach ($tareasI as $tarea)
                                            <div class="col-md-4 float-right @if ( auth()->user()->id == $tarea->id_usuario) border border-success @endif">
                                                <div class="card card-stats @if($tarea->estatus == 'inicio') card-danger @elseif($tarea->estatus == 'proceso') card-warning @endif card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">{{$tarea->nombre}}</h4>
                                                                    <p class="card-category">Estatus: {{$tarea->estatus}}</p>
                                                                    <p class="card-category">Responsable: {{$tarea->personal->name}}</p>
                                                                    <div class="btn-group dropdown">
                                                                        <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                            <span class="btn-label">
                                                                                <i class="fa fa-cog"></i>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li>
                                                                                <p class="dropdown-item">Opciones</p>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="/tarea/{{$tarea->id}}/edit">Siguiente estatus</a>
                                                                                <a class="dropdown-item" href="/tarea/{{$tarea->id}}/">Ver</a>
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
                                <!--Tareas Finalizadas-->
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <div class="row">
                                        @foreach ($tareasT as $tarea)
                                            <div class="col-md-4">
                                                <div class="card card-stats @if($tarea->estatus == 'inicio') card-danger @elseif($tarea->estatus == 'proceso') card-warning @endif card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">{{$tarea->nombre}}</h4>
                                                                    <p class="card-category">Estatus: {{$tarea->estatus}}</p>
                                                                    <p class="card-category">Responsable: {{$tarea->personal->name}}</p>
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
                                                                                <a class="dropdown-item" href="tarea/{{$tarea->id}}/">Ver</a>
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
                                <!--Todas las tareas-->
                                <div class="tab-pane fade" id="v-pills-todo-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title text-center">Listado de todas las tareas</h4>
                                                </div>
                                                
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Descripcion</th>
                                                                    <th>Estatus</th>
                                                                    <th>Responsable</th>
                                                                    <th style="width: 10%">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Descripcion</th>
                                                                    <th>Estatus</th>
                                                                    <th>Responsable</th>
                                                                    <th style="width: 10%">Acciones</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>
                                                                @foreach ($tareas as $tarea)
                                                                    <tr>
                                                                        <td>{{$tarea->nombre}}</td>
                                                                        <td>{{$tarea->descripcion}}</td>
                                                                        <td>{{$tarea->estatus}}</td>
                                                                        <td>{{$tarea->personal->name}}</td>
                                                                        <td>
                                                                            <div class="form-button-action">
                                                                                @if ($tarea->estatus == 'finalizado')
                                                                                    <a href="/tarea/{{$tarea->id}}/" class="btn btn-link btn-primary">
                                                                                        <i class="fas fa-info-circle"></i>
                                                                                    </a>
                                                                                @elseif($tarea->estatus == 'inicio' || $tarea->estatus == 'proceso')
                                                                                    <a href="/tarea/{{$tarea->id}}/" class="btn btn-link btn-primary">
                                                                                        <i class="fas fa-info-circle"></i>
                                                                                    </a>
                                                                                    <a href="/tarea/{{$tarea->id}}/edit" class="btn btn-link btn-warning">
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