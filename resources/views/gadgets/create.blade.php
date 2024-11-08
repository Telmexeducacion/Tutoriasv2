@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Periferico</h1>

    <form action="{{ route('gadgets.store') }}" method="POST">
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
            <label for="numero_serie">Número de Serie</label>
            <input type="text" name="numero_serie" id="numero_serie" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
