@extends('layouts.plantilla')

@section('title', 'Informacion sobre producto')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/producto" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>

    <div class="row">
        <!--Informacion-->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$producto->nombre}}</h4>
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
                                        <img src="/imagenes/productos/{{$producto->foto}}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <p class="card-text">Codigo: {{$producto->codigo}}</p>
                                    <p class="card-text">Modelo: {{$producto->modelo}}</p>
                                    <p class="card-text">Nombre: {{$producto->nombre}}</p>
                                    <p class="card-text">Existencia: {{$producto->existencia}}</p>
                                    <p class="card-text">Proveedor: <a href="/proveedor/{{$producto->proveedores->id}}"> {{$producto->proveedores->nombre}} </a></p>
                                    <p class="card-text">Tipo: {{$producto->tipos->nombre}}</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                    <p>Dado de alta: {{$producto->created_at}}</p>
                                    <p>Modificado: {{$producto->updated_at}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection