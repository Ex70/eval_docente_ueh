@extends('adminlte::page')

@section('title', 'UEH Evaluación Docente - Docentes')

@section('content_header')
    <h1>Catálogo de Docentes</h1>
@stop

@section('content')
        <div class="container mt-5">
            <form method="POST" action="/docentes/agregarDocente">
                @csrf
                <div class="form-group mb-2">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group mb-2">
                    <label>Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Correo institucional">
                </div>
                <div class="form-group mb-2">
                    <label>Foto</label>
                    <input type="text" class="form-control" name="foto" placeholder="Foto">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($docentes) > 0)
                        @foreach ($docentes as $docente)
                            <tr>
                                <th>{{ $docente->id }}</th>
                                <th>{{ $docente->nombre }}</th>
                                <th>{{ $docente->correo }}</th>
                                <th><a href="/docentes/editar/{{ $docente->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/docentes/borrar/{{ $docente->id }}" class="btn btn-danger">Borrar</a>
                                </th>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>Sin información</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @stop

        @section('css')
            {{-- Add here extra stylesheets --}}
            {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
        @stop

        @section('js')
        @stop