@extends('layouts.plantilla')

@section('title', 'Dar de alta producto')

@section('contenido')
    <form action="/producto" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Codigo</label>
            <input class="form-control" type="text" name="codigo">
        </div>

        <div class="form-group">
            <label for="">Modelo</label>
            <input class="form-control" type="text" name="modelo" >
        </div>

        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="">Existencia</label>
            <input class="form-control" type="text" name="existencia">
        </div>

        <div class="custom-file">
            <input class="custom-file-input" type="file" name="foto">
            <label class="custom-file-label" for="customFile">Selecciona la foto</label>
        </div>

        <label for="">Empresa</label>
        <select class="form-control form-control-lg" name="id_proveedor">
            @foreach ($proveedores as $proveedor)
                <option value="{{$proveedor->id}}"> {{$proveedor->empresa}}</option>
            @endforeach
        </select>

        <label for="">Tipo</label>
        <select class="form-control form-control-lg" name="id_tipo">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}"> {{$tipo->nombre}}</option>
            @endforeach
        </select>
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection