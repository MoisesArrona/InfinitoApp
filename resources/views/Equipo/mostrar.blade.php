@extends('layouts.plantilla')

@section('title', 'Información del equipo')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/equipo" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="row">
        <!-- Informacio -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$equipo->nombre}}</h4>
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
                                    <p>Equipo: {{$equipo->equipo}}</p>
                                    <p>Modelo: {{$equipo->modelo}}</p>
                                    <p>Nombre: {{$equipo->nombre}}</p>
                                    <p>SO: {{$equipo->so}}</p>
                                    <p>Procesador: {{$equipo->procesador}}</p>
                                    <p>Ram: {{$equipo->ram}}</p>
                                    <p>Usuario: {{$equipo->usuario}}</p>
                                    <p>Contraseña: {{$equipo->contraseña}}</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <p>Dominio: {{$equipo->dominio}}</p>
                                    <p>IPV4: {{$equipo->ipv4}}</p>
                                    <p>Puerto: {{$equipo->Puerto}}</p>
                                    <p>Registrado: {{$equipo->created_at->isoFormat('D [de] MMMM [del] YYYY')}}</p>
                                    <p>Modificado: {{$equipo->updated_at->isoFormat('D [de] MMMM [del] YYYY')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection