@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Cambiar estatus</div>
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

                        <button class="btn btn-primary" type="submit">Cambiar</button>
                    </form>
                </div>
            </div>            
        </div>
    </div> 
@endsection