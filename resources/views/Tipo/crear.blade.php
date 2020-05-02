@extends('layouts.plantilla')

@section('title', 'Dar de alta tipo')

@section('contenido')

    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/tipo" class="btn btn-info btn-icon-split">
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
                    <form action="/tipo" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control form-control-user" type="text" value="{{old('nombre')}}" name="nombre">
                            @error('nombre')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input class="form-control" type="text" value="{{old('descripcion')}}" name="descripcion">
                            @error('descripcion')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button id="notify" class="btn btn-primary" type="submit">Guardar</button>
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