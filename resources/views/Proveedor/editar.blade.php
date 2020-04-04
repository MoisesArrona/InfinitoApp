@extends('layouts.plantilla')

@section('title', 'Editar proveedor')

@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/proveedor/{{$proveedor->id}}" method="post">
                        @method('PUT')
                        @csrf
                
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{$proveedor->nombre}}" name="nombre">
                            @error('nombre')
                                <code>{{$message}}</code>
                
                            @enderror
                        </div>
                
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">Contacto</label>
                                <input class="form-control" type="text" value="{{$proveedor->contacto}}" name="contacto" >
                                @error('contacto')
                                    <code>{{$mensaje}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-sm-6">
                                <label for="">Telefono</label>
                                <input class="form-control" type="text" value="{{$proveedor->telefono}}" name="telefono">
                                @error('telefono')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{$proveedor->correo}}" name="correo" >
                            @error('correo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Web</label>
                            <input class="form-control" type="text" value="{{$proveedor->web}}" name="web">
                            @error('web')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Domicilio</label>
                            <input class="form-control" type="text" value="{{$proveedor->domicilio}}" name="domicilio" >
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