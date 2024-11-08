@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Equipo</h1>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select name="marca_id" id="marca_id" class="form-control" required>
                @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="modelo_id">Modelo</label>
            <select name="modelo_id" id="modelo_id" class="form-control" required>
                @foreach ($modelos as $modelo)
                    <option value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sistema_operativo_id">Sistema Operativo</label>
            <select name="sistema_operativo_id" id="sistema_operativo_id" class="form-control" required>
                @foreach ($sistemasOperativos as $sistema)
                    <option value="{{ $sistema->id }}">{{ $sistema->nombre }} {{ $sistema->version }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ram">RAM (GB)</label>
            <input type="number" name="ram" id="ram" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dd">Disco Duro (GB)</label>
            <input type="number" name="dd" id="dd" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
