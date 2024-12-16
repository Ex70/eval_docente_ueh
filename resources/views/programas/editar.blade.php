@extends('adminlte::page')

@section('title', 'UEH Evaluación Docente - Programas')

@section('content_header')
    <h1>Editar programa</h1>
@stop

@section('content')
<div class="container mt-5">
    <form method="POST" action="/programas/editar/{{$programa->id}}">
        @csrf
        <div class="form-group mb-2">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$programa->nombre}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
        @stop

        @section('css')
            {{-- Add here extra stylesheets --}}
            {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
        @stop

        @section('js')
        @stop