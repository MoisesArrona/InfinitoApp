@extends('layouts.plantilla')

@section('title', 'Informacion sobre usuario')

@section('contenido')
     <!-- Mensaje -->
     @include('mensajes.satisfactorio')

     <!-- Botones de direccion -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <a href="/usuario" class="btn btn-primary btn-icon-split">
             <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
             </span>
             <span class="text">Regresar</span>
         </a>
     </div>

     <div class="row">
        <!-- Informacio -->
        <div class="col-md-8">
            <div class="card card-profile card-secondary">
                <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                    <div class="profile-picture">
                        <div class="avatar avatar-xl">
                            <img src="/imagenes/usuarios/{{$usuario->foto}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-profile text-center">
                        <div class="name">{{$usuario->name}}</div>
                        <div class="job">{{$usuario->email}}</div>
                        <div class="job">{{$usuario->roles->nombre}}</div>
                        <div class="job">{{$usuario->empresas->nombre}}</div>
                        <div class="desc">{{$usuario->descripcion}}</div>
                        <div class="view-profile">
                            <a href="#" class="btn btn-secondary btn-block">Ver perfil completo</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row user-stats text-center">
                        @if ($usuario->id_rol == 3)
                            <div class="col">
                                <div class="number">{{count($reportes)}}</div>
                                <div class="title">Reportes</div>
                            </div>
                        @else
                            <div class="col">
                                <div class="number">{{count($reportes)}}</div>
                                <div class="title">Reportes</div>
                            </div>
                            <div class="col">
                                <div class="number">{{count($tareas)}}</div>
                                <div class="title">Tareas</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection