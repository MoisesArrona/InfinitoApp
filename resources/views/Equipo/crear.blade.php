@extends('layouts.plantilla')

@section('title', 'Dar de alta equipo')

@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/equipo" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Equipo</label>
                            <input class="form-control" type="text" value="{{old('equipo')}}" name="equipo">
                            @error ('equipo')
                                <code>{{$message}}</code>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">Modelo</label>
                                <input class="form-control" type="text" value="{{old('modelo')}}" name="modelo">
                                @error ('modelo')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Nombre</label>
                                <input class="form-control" type="text" value="{{old('nombre')}}" name="nombre" >
                                @error ('nombre')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">SO</label>
                                <input class="form-control" type="text" value="{{old('so')}}" name="so">
                                @error ('so')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Procesador</label>
                                <input class="form-control" type="text" value="{{old('proceso')}}" name="procesador" >
                                @error ('procesador')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">Ram</label>
                                <input class="form-control" type="text" value="{{old('ram')}}" name="ram" >
                                @error ('ram')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Dominio</label>
                                <input class="form-control" type="text" value="{{old('dominio')}}" name="dominio">
                                @error ('dominio')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">IPV4</label>
                                <input class="form-control" type="text" value="{{old('ipv4')}}" name="ipv4" >
                                @error ('ipv4')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Puerto</label>
                                <input class="form-control" type="text" value="{{old('puerto')}}" name="puerto" >
                                @error ('puerto')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">Usuario</label>
                                <input class="form-control" type="text" value="{{old('usuario')}}" name="usuario">
                                @error ('usuario')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Contraseña</label>
                                <input class="form-control" type="text" value="{{old('contraseña')}}" name="contraseña" >
                                @error ('contraseña')
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