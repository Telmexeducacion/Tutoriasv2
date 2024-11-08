@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Alertas</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Alerta</th>
                <th>Descripción</th>
                <th>Fecha de Activación</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alertas as $alerta)
                <tr>
                    <td>{{ $alerta->id }}</td>
                    <td>{{ $alerta->tipo_alerta }}</td>
                    <td>{{ Str::limit($alerta->descripcion, 50) }}</td>
                    <td>{{ $alerta->fecha_activacion }}</td>
                    <td>{{ $alerta->estado }}</td>
                    <td>
                        <a href="{{ route('alertas.show', $alerta->id) }}" class="btn btn-info btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

