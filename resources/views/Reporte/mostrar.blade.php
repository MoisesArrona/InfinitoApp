@extends('layouts.plantilla')

@section('title', 'Informacion el ticket')

@section('contenido')

    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/reporte" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="row">
        <!-- Informacion -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$reporte->nombre}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                                    <i class="flaticon-folder"></i>
                                    Informacion General
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
                                    <i class="flaticon-search-2"></i>
                                    Información especifica
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="tab-content" id="v-pills-with-icon-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                    <div class="avatar avatar-xxl">
                                        <img src="/imagenes/reportes/{{$reporte->foto}}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <p>Descripción: {{$reporte->descripcion}}</p>
                                    <p>Software remoto: {{$reporte->remoto}}</p>
                                    <p>Remoto id: {{$reporte->remoto_id}}</p>
                                    <p>Remoto contraseña: {{$reporte->remoto_pass}}</p>
                                    <p>Cliente: {{$reporte->cliente->name}}</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <p>Dado de alta: {{$reporte->created_at}}</p>
                                    <p>Modificado: {{$reporte->updated_at}}</p>
                                    <p class="text-center card-title">Información de movimiento</p>
                                    <p class="text-center ">Muestra quien dio seguimiento al ticket</p>
                                    @foreach ($detalles as $detalle)
                                        <p>Usuario: {{$detalle->cliente->name}}</p>
                                        <p>Observación:{{$detalle->observacion}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Segerencias-->
        <div class="card col-md-4">
            <div class="card-body">
                <div class="card-title fw-mediumbold">Tickets Pendientes</div>
                <p>Listado de tickets con mas tiempo sin atender</p>
                <div class="card-list">
                    @foreach ($reportes as $reporte)
                        <div class="item-list">
                            <div class="info-user ml-3">
                                <div class="username">{{$reporte->nombre}}</div>
                                <div class="status">{{$reporte->cliente->name}}</div>
                            </div>
                            <a href="/reporte/{{$reporte->id}}/edit" class="btn btn-link btn-info">
                                <i class="fas fa-check"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection