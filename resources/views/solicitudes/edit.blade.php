@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Solicitud de Servicio #{{ $solicitud->id }}</h1>

    <form action="{{ route('solicitudes.update', $solicitud->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="sede_id">Sede</label>
            <select name="sede_id" id="sede_id" class="form-control" required>
                @foreach ($sedes as $sede)
                    <option value="{{ $sede->id }}" {{ $solicitud->sede_id == $sede->id ? 'selected' : '' }}>
                        {{ $sede->ciudad }} - {{ $sede->edificio }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="equipo_id">Equipo (Opcional)</label>
            <select name="equipo_id" id="equipo_id" class="form-control">
                <option value="">Seleccionar equipo...</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $solicitud->equipo_id == $equipo->id ? 'selected' : '' }}>
                        {{ $equipo->nombre }} - {{ $equipo->serie }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="gadget_id">Gadget (Opcional)</label>
            <select name="gadget_id" id="gadget_id" class="form-control">
                <option value="">Seleccionar gadget...</option>
                @foreach ($gadgets as $gadget)
                    <option value="{{ $gadget->id }}" {{ $solicitud->gadget_id == $gadget->id ? 'selected' : '' }}>
                        {{ $gadget->nombre }} - {{ $gadget->numero_serie }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required>{{ $solicitud->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="abierto" {{ $solicitud->estado == 'abierto' ? 'selected' : '' }}>Abierto</option>
                <option value="en progreso" {{ $solicitud->estado

