@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Solicitud de Servicio</h1>

    <form action="{{ route('solicitudes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sede_id">Sede</label>
            <select name="sede_id" id="sede_id" class="form-control" required>
                @foreach ($sedes as $sede)
                    <option value="{{ $sede->id }}">{{ $sede->ciudad }} - {{ $sede->edificio }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="equipo_id">Equipo (Opcional)</label>
            <select name="equipo_id" id="equipo_id" class="form-control">
                <option value="">Seleccionar equipo...</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }} - {{ $equipo->serie }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gadget_id">Gadget (Opcional)</label>
            <select name="gadget_id" id="gadget_id" class="form-control">
                <option value="">Seleccionar gadget...</option>
                @foreach ($gadgets as $gadget)
                    <option value="{{ $gadget->id }}">{{ $gadget->nombre }} - {{ $gadget->numero_serie }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="abierto">Abierto</option>
                <option value="en progreso">En Progreso</option>
                <option value="cerrado">Cerrado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_apertura">Fecha de Apertura</label>
            <input type="date" name="fecha_apertura" id="fecha_apertura" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Solicitud</button>
    </form>
</div>
@endsection
