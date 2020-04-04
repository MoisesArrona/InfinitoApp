@extends('layouts.plantilla')

@section('title', 'Dar de alta reporte')

@section('contenido')
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/reporte" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{old('nombre')}}"name="nombre">
                            @error('nombre')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input class="form-control" type="text" value="{{old('descripcion')}}"name="descripcion" >
                            @error('descripcion')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" name="foto">
                            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
                            @error('foto')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Acceso remoto</label>
                                <select class="form-control input-square" name="remoto">
                                    <option value="">--Por favor selecciona el acceso--</option>
                                    <option value="TeamViewer">TeamViewer</option>
                                    <option value="AnyDesk">AnyDesk</option>
                                    <option value="Supremo">Supremo</option>
                                </select>
                                @error('remoto')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-6">
                                <label for="">Id Remoto</label>
                                <input class="form-control" type="text" value="{{old('remoto_id')}}"name="remoto_id">
                                @error('remoto_id')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Contraseña remoto</label>
                                <input class="form-control" type="text" value="{{old('remoto_pass')}}" name="remoto_pass" >
                                @error('remoto_pass')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-6">
                                <label for="">Estatus</label>
                                <input class="form-control" type="text" name="estatus" value="inicio" readonly>
                                @error('estatus')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>
                
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </form>
                </div>
            </div>            
        </div>
    </div> 
@endsection