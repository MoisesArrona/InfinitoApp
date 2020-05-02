@extends('layouts.plantilla')

@section('title', 'Dar de alta proveedor')

@section('contenido')
    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/proveedor" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
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
                    <form action="/proveedor" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{old('nombre')}}" name="nombre">
                            @error('nombre')
                
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Contacto</label>
                                <input class="form-control" type="text" value="{{old('contacto')}}" name="contacto" >
                                @error('contacto')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label for="">Telefono</label>
                                <input class="form-control" type="text" value="{{old('telefono')}}" name="telefono">
                                @error('telefono')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{old('correo')}}" name="correo" >
                            @error('correo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Web</label>
                            <input class="form-control" type="url" value="{{old('web')}}" name="web">
                            @error('web')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Domicilio</label>
                            <input class="form-control" type="text" value="{{old('domicilio')}}" name="domicilio" >
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