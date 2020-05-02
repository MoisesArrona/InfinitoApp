@extends('layouts.plantilla')

@section('title', 'Editar usuario')

@section('contenido')
    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/usuario" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="flaticon-left-arrow"></i>
            </span>
            <span class="text">Regresar</span>
        </a>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/usuario/{{$usuario->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{$usuario->name}}" name="name">
                            @error('name')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{$usuario->email}}" name="email" >
                            @error('email')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" name="password">
                            @error('password')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </form>
                </div>
            </div>            
        </div>
        
        <!-- Mensaje -->
        <div class="col-md-4">
            @include('mensajes.error')
        </div>
    </div>
@endsection