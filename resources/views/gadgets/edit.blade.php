@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Periferico: {{ $gadget->nombre }}</h1>

    <form action="{{ route('gadgets.update', $gadget->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $gadget->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select name="marca_id" id="marca_id" class="form-control" required>
                @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ $gadget->marca_id == $marca->id ? 'selected' : '' }}>{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="modelo_id">Modelo</label>
            <select name="modelo_id" id="modelo_id" class="form-control" required>
                @foreach ($modelos as $modelo)
                    <option value="{{ $modelo->id }}" {{ $gadget->modelo_id == $modelo->id ? 'selected' : '' }}>{{ $modelo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="numero_serie">Número de Serie</label>
            <input type="text" name="numero_serie" id="numero_serie" class="form-control" value="{{ $gadget->numero_serie }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
