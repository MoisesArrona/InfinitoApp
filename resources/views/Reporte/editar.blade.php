@extends('layouts.plantilla')

@section('title', 'Atender ticket')

@section('contenido')
    <div class="row">
        <!-- Formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ingrese los datos</div>
                </div>
                <div class="card-body">
                    <p>Ojo, debes de cambiar solo cuando en verdad se atienda el ticket</p>
                    <form action="/reporte/{{$reporte->id}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group col-md-6">
                            <label for="">Estatus</label>
                            <input class="form-control" type="text" name="estatus" @if ($reporte->estatus == 'inicio') value="proceso" @else value="finalizado" @endif readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Observación</label>
                            <input class="form-control" type="text" name="observacion" required>
                        </div>
                
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </form>
                </div>
            </div>            
        </div>
    </div> 
@endsection