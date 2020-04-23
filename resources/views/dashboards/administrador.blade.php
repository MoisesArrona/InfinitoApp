@extends('layouts.plantilla')

@section('title', 'Dashboard administrativo')

@section('contenido')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Clientes</p>
                                <h4 class="card-title">{{count($usuarios->where('id_rol', '3'))}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="far fa-newspaper"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Tickets</p>
                                <h4 class="card-title">{{count($reportes->where('estatus', 'inicio'))}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="far fa-chart-bar"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="card-category">Tareas</p>
                                <h4 class="card-title">{{count($tareas->where('estatus', 'inicio'))}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">User Statistics</div>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                Export
                            </a>
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Print
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                </div>
            </div>
        </div>

        <div class="card col-md-4">
            <div class="card-body">
                <div class="card-title fw-mediumbold">Personal de {{auth()->user()->empresas->nombre}}</div>
                <div class="card-list">
                    @foreach ($usuarios->where('id_rol', 2) as $usuario)
                        <div class="item-list">
                            <div class="avatar">
                                <img src="/imagenes/usuarios/{{ $usuario->foto }}" alt="image profile" class="avatar-img rounded-circle">
                            </div>
                            <div class="info-user ml-3">
                                <div class="username">{{$usuario->name}}</div>
                                <div class="status">{{$usuario->roles->nombre}}</div>
                            </div>
                            <button class="btn btn-icon btn-primary btn-round btn-sm">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection