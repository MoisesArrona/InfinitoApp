@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <form action="/tarea/{{$tarea->id}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input class="form-control" type="text" value="{{$tarea->nombre}}" name="nombre">
                        </div>
                
                        <div class="form-group">
                            <label for="">descripcion</label>
                            <input class="form-control" type="text" value="{{$tarea->descripcion}}" name="descripcion" >
                        
                        </div>
                
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Estatus</label>
                                <select class="form-control input-square" name="estatus">
                                    <option value="">--Por favor selecciona el estatus--</option>
                                    <option value="inicio"> Inicio</option>
                                    <option value="proceso"> Proceso</option>
                                    <option value="finalizado"> Finalizado</option>
                                </select>
                                @error('estatus')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Usuario</label>
                                <select class="form-control input-square" name="id_usuario">
                                    <option value="">--Por favor selecciona el empleado--</option>
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}"> {{$usuario->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_usuario')
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