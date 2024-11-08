@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Progreso a la Solicitud de Servicio #{{ $solicitud->id }}</h1>

    <form action="{{ route('solicitudes.addProgress', $solicitud->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="tema_garantia">¿Es tema de garantía?</label>
            <select name="tema_garantia" id="tema_garantia" class="form-control">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Agregar Progreso</button>
    </form>

    <a href="{{ route('solicitudes.show', $solicitud->id) }}" class="btn btn-primary mt-3">Volver a los Detalles de la Solicitud</a>
</div>
@endsection

