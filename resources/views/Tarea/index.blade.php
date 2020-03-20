@extends('layouts.plantilla')

@section('title', 'Tareas')

@section('contenido')
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="tarea/create" class="btn btn-info btn-icon-split">
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
                    <h4 class="card-title">Nav Pills With Icon (Vertical Tabs)</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                                    <i class="flaticon-home"></i>
                                    Pendientes
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                                    <i class="flaticon-user-4"></i>
                                    Finalizadas
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-with-icon-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                    @foreach ($tareas as $tarea)
                                        <div class="col-md-4">
                                            <div class="card card-stats @if($tarea->estatus == 'inicio') card-danger @elseif($tarea->estatus == 'proceso') card-warning @endif card-round">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="flaticon-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col col-stats">
                                                            <div class="numbers">
                                                                <h4 class="card-title">{{$tarea->nombre}}</h4>
                                                                <p class="card-category">{{$tarea->estatus}}</p>
                                                                <p class="card-category">{{$tarea->id_usuario}}</p>
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
                                                                            <a class="dropdown-item" href="tarea/{{$tarea->id}}/edit">Editar</a>
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
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    @foreach ($tareasT as $tarea)
                                        <div class="col-md-4">
                                            <div class="card card-stats @if($tarea->estatus == 'inicio') card-danger @elseif($tarea->estatus == 'proceso') card-warning @endif card-round">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="flaticon-users"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col col-stats">
                                                            <div class="numbers">
                                                                <h4 class="card-title">{{$tarea->nombre}}</h4>
                                                                <p class="card-category">{{$tarea->estatus}}</p>
                                                                <p class="card-category">{{$tarea->id_usuario}}</p>
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
                                                                            <a class="dropdown-item" href="tarea/{{$tarea->id}}/edit">Editar</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection