@extends('layouts.plantilla')

@section('title', 'Dar de alta producto')

@section('contenido')
    <form action="/producto" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Codigo</label>
            <input class="form-control " type="text" value="{{old('codigo')}}" name="codigo">
            @error('codigo')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Modelo</label>
            <input class="form-control" type="text" value="{{old('modelo')}}" name="modelo">
            @error('modelo')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" value="{{old('nombre')}}" name="nombre">
            @error('nombre')
                <code>{{$message}}</code>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Existencia</label>
            <input class="form-control" type="text" value="{{old('existencia')}}" name="existencia">
            @error('existencia')
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

        <label for="">Empresa</label>
        <select class="form-control form-control-lg" name="id_proveedor">
            @foreach ($proveedores as $proveedor)
                <option value="{{$proveedor->id}}"> {{$proveedor->empresa}}</option>
            @endforeach
        </select>
        @error('id_proveedor')
            <code>{{$message}}</code>
        @enderror

        <label for="">Tipo</label>
        <select class="form-control form-control-lg" name="id_tipo">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}"> {{$tipo->nombre}}</option>
            @endforeach
        </select>
        @error('id_tipo')
            <code>{{$message}}</code>
        @enderror
        
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection