@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Progreso para la Solicitud de Servicio #{{ $solicitud->id }}</h1>

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

    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary mt-3">Volver a la Lista de Solicitudes</a>
</div>
@endsection
