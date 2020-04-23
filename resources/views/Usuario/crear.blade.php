@extends('layouts.plantilla')

@section('title', 'Dar de alta usuario')

@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/usuario" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{old('name')}}" name="name">
                            @error('name')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input class="form-control" type="text" value="{{old('email')}}" name="email" >
                            @error('email')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input class="form-control" type="password" value="{{old('password')}}" name="password" >
                            @error('password')
                                <code>{{$message}}</code>
                            @enderror
                        </div>
                
                        <label for="">Selecciona la foto</label>
                        <div class="custom-file">
                            <input class="custom-file-input" type="file" name="foto">
                            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
                            @error('foto')
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
        
        
    </div>
@endsection