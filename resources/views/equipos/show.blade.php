@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Equipo: {{ $equipo->nombre }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $equipo->nombre }}</li>
        <li class="list-group-item"><strong>Marca:</strong> {{ $equipo->marca->nombre }}</li>
        <li class="list-group-item"><strong>Modelo:</strong> {{ $equipo->modelo->nombre }}</li>
        <li class="list-group-item"><strong>Sistema Operativo:</strong> {{ $equipo->sistemaOperativo->nombre }} {{ $equipo->sistemaOperativo->version }}</li>
        <li class="list-group-item"><strong>RAM:</strong> {{ $equipo->ram }} GB</li>
        <li class="list-group-item"><strong>Disco Duro:</strong> {{ $equipo->dd }} GB</li>
    </ul>

    <a href="{{ route('equipos.index') }}" class="btn btn-primary mt-3">Volver a la Lista</a>
</div>
@endsection
