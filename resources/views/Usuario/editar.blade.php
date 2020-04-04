@extends('layouts.plantilla')

@section('title', 'Editar usuario')

@section('contenido')
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
                        </div>
                        
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{$usuario->email}}" name="email" >
                        </div>

                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" name="password" required>
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