@extends('adminlte::page')

@section('title', 'Activos EHS - Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Agregar nuevo producto</h5>
                    <form method="POST" enctype="multipart/form-data" action="/productos/agregarProductos">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Concepto</label>
                            <input name="concepto" required class="form-control" placeholder="Ingrese concepto" />
                            @error('concepto')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Código</label>
                            <input name="codigo" required class="form-control" placeholder="Ingrese código" />
                            @error('codigo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" required class="form-control" placeholder="Ingrese cantidad" />
                            @error('cantidad')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Fecha</label>
                            <input type="date" name="fecha" required class="form-control" placeholder="Ingrese fecha" />
                            @error('date')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">No. De Serie</label>
                            <input name="num_serie" required class="form-control" placeholder="Ingrese No. de Serie" />
                            @error('num_serie')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione tipo de activo</label>
                            <select required name="id_tipo_activo" class="form-control">
                                @foreach ($activos as $activo)
                                    <option value="{{ $activo->id }}">{{ $activo->nombre }}</option>
                                @endforeach
                            </select>
                            @error('id_tipo_activo')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione departamento</label>
                            <select required name="id_departamento" class="form-control">
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                            @error('id_departamento')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Años de vida</label>
                            <input type="number" name="anios_vida" required class="form-control" placeholder="Años de vida" />
                            @error('anios_vida')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Seleccione depreciación</label>
                            <select required name="id_depreciacion" class="form-control">
                                @foreach ($depreciaciones as $porciento)
                                    <option value="{{ $porciento->id }}">{{ $porciento->porciento }}</option>
                                @endforeach
                            </select>
                            @error('id_depreciacion')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Monto</label>
                            <input name="monto" required class="form-control" placeholder="Ingrese monto" />
                            @error('monto')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Meses Depreciar</label>
                            <input name="meses_a_depreciar" required class="form-control" placeholder="Meses a depreciar" />
                            @error('meses_a_depreciar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label class="form-label">Foto de referencia</label>
                            <input name="picture" type="file" required class="form-control" />
                            @error('picture')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary w-100">Agregar producto</button>
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