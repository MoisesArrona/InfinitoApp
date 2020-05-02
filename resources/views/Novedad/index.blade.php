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
    <ul class="timeline">
        
        @php ($i = 0)
        @foreach ($novedades as $novedad)
        @php ($i++)
            <li class="@if ($i%2 == 0) timeline-inverted @endif">
                <div class="timeline-badge"><i class="flaticon-message"></i></div>
                <div class="timeline-panel">
                    <div class="card-list">
                        <div class="item-list">
                            <div class="avatar avatar-sm">
                                @if ($novedad->usuario->foto == null)
                                    <img src="/Base/mono.png" alt="..." class="avatar-img rounded-circle">
                                @else
                                    <img src="imagenes/usuarios/{{$novedad->usuario->foto}}" alt="..." class="avatar-img rounded-circle">
                                @endif
                            </div>
                            <div class="info-user ml-3">
                                <div class="username"><a href="usuario/{{$novedad->usuario->id}}">{{$novedad->usuario->name}}</a></div>
                                
                                <p><small class="text-muted"><i class="flaticon-message"></i> {{$novedad->created_at->diffForHumans()}}</small></p>
                            </div>
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
                    </div>
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$novedad->titulo}}</h4>
                    </div>
                    <div class="timeline-body">
                        <p>{{$novedad->cuerpo}}</p>
                        @if ($novedad->foto == null)
                            
                        @else
                            <img src="/imagenes/novedades/{{$novedad->foto}}" alt="..." class="img-fluid center" width="400">
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection