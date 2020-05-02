@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
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
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/empresa/{{$empresa->id}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{$empresa->nombre}}" name="nombre">
                            @error('nombre')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input class="form-control" type="text" value="{{$empresa->telefono}}" name="telefono" >
                            @error('telefono')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{$empresa->correo}}" name="correo">
                            @error('correo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Web</label>
                            <input class="form-control" type="text" value="{{$empresa->web}}" name="web" >
                            @error('web')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Domicilio</label>
                            <input class="form-control" type="text" value="{{$empresa->domicilio}}" name="domicilio">
                            @error('domicilio')
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