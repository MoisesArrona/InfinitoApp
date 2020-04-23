@extends('layouts.plantilla')

@section('title', 'Dar de alta empresa')

@section('contenido')
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/empresa" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{old('nombre')}}" name="nombre">
                            @error('nombre')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input class="form-control" type="text" value="{{old('telefono')}}" name="telefono" >
                            @error('telefono')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{old('correo')}}" name="correo">
                            @error('correo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Web</label>
                            <input class="form-control" type="text" value="{{old('web')}}" name="web" >
                            @error('web')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Domicilio</label>
                            <input class="form-control" type="text" value="{{old('domicilio')}}" name="domicilio">
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