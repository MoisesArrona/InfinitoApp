@extends('layouts.plantilla')

@section('title', 'Publicaciones (novedades)')

@section('contenido')
    <!-- Mensaje -->
    @include('mensajes.satisfactorio')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="novedad/create" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="flaticon-envelope"></i>
            </span>
            <span class="text">Publicar</span>
        </a>
    </div>

    <!--POST-->
    <div class="row">
        @foreach ($novedades as $novedad)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">{{$novedad->titulo}}</div>
                        <div class="btn-group dropdown float-right">
                            <button type="button" class="btn btn-secundary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="btn-label">
                                    <i class="fa fa-cog"></i>
                                </span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <p class="dropdown-item">Opciones</p>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="novedad/{{$novedad->id}}/edit">Editar publicacion</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{$novedad->cuerpo}}</p>
                        <div class="avatar avatar-xxl">
                            <img src="/imagenes/novedades/{{$novedad->foto}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-list">
                            <div class="item-list">
                                <div class="avatar avatar-sm">
                                    <img src="imagenes/usuarios/{{$novedad->usuario->foto}}" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="info-user ml-3">
                                    <div class="username">{{$novedad->usuario->name}}</div>
                                    <div class="status">{{$novedad->usuario->roles->nombre}}</div>
                                    <div class="status">{{$novedad->created_at}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection