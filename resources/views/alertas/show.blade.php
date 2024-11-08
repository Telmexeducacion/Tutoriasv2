@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Alerta #{{ $alerta->id }}</h1>

    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Tipo de Alerta:</strong> {{ $alerta->tipo_alerta }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $alerta->descripcion }}</li>
        <li class="list-group-item"><strong>Fecha de Activación:</strong> {{ $alerta->fecha_activacion }}</li>
        <li class="list-group-item"><strong>Fecha Límite:</strong> {{ $alerta->fecha_limite ?? 'No especificada' }}</li>
        <li class="list-group-item"><strong>Estado:</strong> {{ $alerta->estado }}</li>
    </ul>

    @if ($alerta->estado !== 'resuelta')
        <form action="{{ route('alertas.update', $alerta->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-success">Marcar como Resuelta</button>
        </form>
    @endif

    <a href="{{ route('alertas.index') }}" class="btn btn-primary mt-3">Volver a la Lista de Alertas</a>
</div>
@endsection

