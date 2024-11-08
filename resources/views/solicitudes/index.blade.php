@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Solicitudes de Servicio</h1>
    <a href="{{ route('solicitudes.create') }}" class="btn btn-primary mb-3">Crear Nueva Solicitud</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo</th>
                <th>Gadget</th>
                <th>Sede</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha Apertura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->id }}</td>
                    <td>{{ $solicitud->equipo ? $solicitud->equipo->nombre : 'N/A' }}</td>
                    <td>{{ $solicitud->gadget ? $solicitud->gadget->nombre : 'N/A' }}</td>
                    <td>{{ $solicitud->sede->ciudad }}</td>
                    <td>{{ $solicitud->descripcion }}</td>
                    <td>{{ $solicitud->estado }}</td>
                    <td>{{ $solicitud->fecha_apertura }}</td>
                    <td>
                        <a href="{{ route('solicitudes.show', $solicitud->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('solicitudes.edit', $solicitud->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('solicitudes.destroy', $solicitud->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
