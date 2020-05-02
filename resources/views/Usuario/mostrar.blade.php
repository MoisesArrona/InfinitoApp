@extends('layouts.plantilla')

@section('title', 'Informacion sobre usuario')

@section('contenido')
     <!-- Mensaje -->
     @include('mensajes.satisfactorio')

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