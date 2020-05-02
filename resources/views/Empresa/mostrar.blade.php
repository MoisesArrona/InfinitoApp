@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
   <!-- Mensaje -->
   @include('mensajes.satisfactorio')

   <!-- Botones de direccion -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <a href="/empresa" class="btn btn-info btn-icon-split">
           <span class="icon text-white-50">
               <i class="flaticon-left-arrow"></i>
           </span>
           <span class="text">Regresar</span>
       </a>
   </div>

   <div class="row">
       <!-- Informacion -->
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title">{{$empresa->nombre}}</h4>
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
                                    <p class="card-text">Telefono: {{$empresa->telefono}}</p>
                                    <p>Correo: <a href="mailto:{{$empresa->correo}}">{{$empresa->correo}}</a></p>
                                    <p>Web: <a href="{{$empresa->web}}" target="_blank">{{$empresa->web}}</a></p>
                                    <p class="card-text">Domiclio: {{$empresa->domicilio}}</p>
                               </div>
                               <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                <p>Registrado: {{$empresa->created_at->isoFormat('D [de] MMMM [del] YYYY')}}</p>
                                <p>Modificado: {{$empresa->updated_at->isoFormat('D [de] MMMM [del] YYYY')}}</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--Usuarios-->
       <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title fw-mediumbold">Usuarios de la empresa</div>
                <div class="card-list">
                    @foreach ($usuarios as $usuario)
                        <div class="item-list">
                            <div class="avatar">
                                <img src="/imagenes/usuarios/{{$usuario->foto}}" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="info-user ml-3">
                                <div class="username">{{$usuario->name}}</div>
                                <div class="status">{{$usuario->descripcion}}</div>
                            </div>
                            <a href="/usuario/{{$usuario->id}}" class="btn btn-link btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection