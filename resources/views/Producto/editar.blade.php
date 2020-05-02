@extends('layouts.plantilla')

@section('title', 'Editar producto')

@section('contenido')
    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/producto" class="btn btn-primary btn-icon-split">
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
                    <div class="card-title">Ingrese la datos</div>
                </div>
                <div class="card-body">
                    <form action="/producto/{{$producto->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Codigo</label>
                                <input class="form-control" type="text" value="{{$producto->codigo}}" name="codigo">
                                @error('codigo')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" value="{{$producto->modelo}}" name="modelo" >
                                @error('modelo')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Nombre</label>
                                <input class="form-control" type="text" value="{{$producto->nombre}}" name="nombre">
                                @error('nombre')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label for="">Existencia</label>
                                <input class="form-control" type="text" value="{{$producto->existencia}}" name="existencia" readonly>
                                @error('existencia')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Selecciona la imagen</label>
                                <div class="custom-file">
                                    <input class="custom-file-input" type="file" name="foto">
                                    <label class="custom-file-label" for="customFile">Selecciona la foto</label>
                                    @error('foto')
                                        <code>{{$message}}</code>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Precio</label>
                                <input class="form-control" type="text" value="{{$producto->precio}}" name="precio">
                                @error('precio')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Empresa</label>
                                <select class="form-control input-square" name="id_proveedor">
                                    <option value="{{$producto->id_proveedor}}">{{$producto->proveedores->nombre}}</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}"> {{$proveedor->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_proveedor')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label for="">Tipo</label>
                                <select class="form-control input-square" name="id_tipo">
                                    <option value="{{$producto->id_tipo}}">{{$producto->tipos->nombre}}</option>
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->id}}"> {{$tipo->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_tipo')
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