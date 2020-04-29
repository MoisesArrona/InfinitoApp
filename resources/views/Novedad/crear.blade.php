@extends('layouts.plantilla')

@section('title', 'Crear publicacion')

@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/novedad" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6">
                            <label for="">Titulo</label>
                            <input class="form-control " type="text" value="{{old('titulo')}}" name="titulo">
                            @error('titulo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="">Cuerpo</label>
                            <input class="form-control" type="text" value="{{old('cuerpo')}}" name="cuerpo">
                            @error('cuerpo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class=" form-group ">
                            <label for="">Selecciona la imagen</label>
                            <div class="custom-file">
                                <input class="custom-file-input" src="/Base/caja.png" type="file" name="foto">
                                <label class="custom-file-label" for="customFile">Selecciona la foto</label>
                                @error('foto')
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