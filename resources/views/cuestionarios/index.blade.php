@extends('adminlte::page')

@section('title', 'Activos EHS - Cuestionarios')

@section('content_header')
    <h1>Cuestionarios</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Consultar formularios restantes</h5>
                    <form method="POST" enctype="multipart/form-data" action="/cuestionarios/consulta">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Correo/Matrícula</label>
                            <input name="correo" required class="form-control" placeholder="Ingrese correo del alumno" />
                            @error('correo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione grupo</label>
                            <select required name="grupo" class="form-control">
                                @foreach ($semestres as $semestre)
                                    <option value="{{ $semestre->id }}">{{ $semestre->nombre }} - {{$semestre->grupo}}</option>
                                @endforeach
                            </select>
                            @error('grupo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione programa</label>
                            <select required name="programa" class="form-control">
                                @foreach ($programas as $programa)
                                    <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                                @endforeach
                            </select>
                            @error('programa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary w-100">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop