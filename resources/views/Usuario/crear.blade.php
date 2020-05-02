@extends('layouts.plantilla')

@section('title', 'Dar de alta usuario')

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
        <!--Formulario--->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/usuario" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nombre</label>
                                <input class="form-control" type="text" value="{{old('name')}}" name="name">
                                @error('name')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="">Correo</label>
                                <input class="form-control" type="text" value="{{old('email')}}" name="email" >
                                @error('email')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" value="{{old('password')}}" name="password" >
                            @error('password')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Selecciona la foto</label>
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" name="foto">
                                <label class="custom-file-label" for="customFile">Selecciona la foto</label>
                                @error('foto')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input class="form-control" type="text" value="{{old('descripcion')}}" name="descripcion" >
                            @error('descripcion')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Rol</label>
                                <select class="form-control input-square" name="id_rol">
                                    <option value="">--Por favor selecciona el rol--</option>
                                    @foreach ($roles as $rol)
                                        <option value="{{$rol->id}}"> {{$rol->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_rol')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
    
                            <div class="form-group col-md-6">
                                <label for="">Empresa</label>
                                <select class="form-control input-square" name="id_empresa">
                                    <option value="">--Por favor selecciona la empresa--</option>
                                    @foreach ($empresas as $empresa)
                                        <option value="{{$empresa->id}}"> {{$empresa->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_empresa')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
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