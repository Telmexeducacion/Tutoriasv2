@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Gadget: {{ $gadget->nombre }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $gadget->nombre }}</li>
        <li class="list-group-item"><strong>Marca:</strong> {{ $gadget->marca->nombre }}</li>
        <li class="list-group-item"><strong>Modelo:</strong> {{ $gadget->modelo->nombre }}</li>
        <li class="list-group-item"><strong>Número de Serie:</strong> {{ $gadget->numero_serie }}</li>
    </ul>

    <a href="{{ route('gadgets.index') }}" class="btn btn-primary mt-3">Volver a la Lista</a>
</div>
@endsection

