@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Solicitud de Servicio #{{ $solicitud->id }}</h1>

    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Sede:</strong> {{ $solicitud->sede->ciudad }} - {{ $solicitud->sede->edificio }}</li>
        <li class="list-group-item"><strong>Equipo:</strong> {{ $solicitud->equipo ? $solicitud->equipo->nombre : 'N/A' }}</li>
        <li class="list-group-item"><strong>Gadget:</strong> {{ $solicitud->gadget ? $solicitud->gadget->nombre : 'N/A' }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $solicitud->descripcion }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $solicitud->estado }}</li>
        <li class="list-group-item"><strong>Fecha de Apertura:</strong> {{ $solicitud->fecha_apertura }}</li>
        <li class="list-group-item"><strong>Fecha de Cierre:</strong> {{ $solicitud->fecha_cierre ?? 'En progreso' }}</li>
    </ul>

    <h3>Historial de Progreso</h3>
    <ul class="list-group">
        @forelse ($historial as $progreso)
            <li class="list-group-item">
                <strong>Fecha:</strong> {{ $progreso->fecha }}<br>
                <strong>Comentario:</strong> {{ $progreso->comentario }}<br>
                <strong>Tema de Garantía:</strong> {{ $progreso->tema_garantia ? 'Sí' : 'No' }}
            </li>
        @empty
            <li class="list-group-item">No hay progreso registrado para esta solicitud.</li>
        @endforelse
    </ul>

    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary mt-3">Volver a la Lista</a>
</div>
@endsection

