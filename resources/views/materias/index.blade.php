@extends('adminlte::page')

@section('title', 'Activos EHS - Materias')

@section('content_header')
    <h1>Materias</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Agregar nueva materia</h5>
                    <form method="POST" enctype="multipart/form-data" action="/materias/agregarMateria">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nombre</label>
                            <input name="nombre" required class="form-control" placeholder="Ingrese nombre de materia" />
                            @error('nombre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione semestre</label>
                            <select required name="id_semestre" class="form-control">
                                @foreach ($semestres as $semestre)
                                    <option value="{{ $semestre->id }}">{{ $semestre->nombre }} - {{$semestre->grupo}}</option>
                                @endforeach
                            </select>
                            @error('id_semestre')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione programa</label>
                            <select required name="id_programa" class="form-control">
                                @foreach ($programas as $programa)
                                    <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                                @endforeach
                            </select>
                            @error('id_programa')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione licenciatura</label>
                            <select required name="id_licenciatura" class="form-control">
                                @foreach ($licenciaturas as $licenciatura)
                                    <option value="{{ $licenciatura->id }}">{{ $licenciatura->nombre }}</option>
                                @endforeach
                            </select>
                            @error('id_licenciatura')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione docente</label>
                            <select required name="id_docente" class="form-control">
                                @foreach ($docentes as $docente)
                                    <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                                @endforeach
                            </select>
                            @error('id_docente')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary w-100">Agregar materia</button>
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