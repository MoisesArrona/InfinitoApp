@extends('layouts.plantilla')

@section('title', 'Cambiar estatus de tarea')

@section('contenido')
    <!-- Botones de direccion -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="/tarea" class="btn btn-info btn-icon-split">
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
                    <div class="card-title">Cambiar estatus de tarea: {{$tarea->nombre}}</div>
                </div>
                <div class="card-body">
                    <p>Ojo, debes de cambiar solo cuando en verdad se cumpla la tarea</p>
                    <form action="/tarea/{{$tarea->id}}" method="post">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group col-md-6">
                            <label for="">Estatus</label>
                            <input class="form-control" type="text" name="estatus" @if ($tarea->estatus == 'inicio') value="proceso" @else value="finalizado" @endif readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Observación</label>
                            <input class="form-control" type="text" name="observacion" required>
                        </div>

                        <button class="btn btn-primary" type="submit">Cambiar</button>
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