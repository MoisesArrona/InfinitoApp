@extends('layouts.plantilla')

@section('contenido')
    {{$reporte['nombre']}}
    {{$reporte['descripcion']}}
    {{$reporte['remoto']}}
@endsection