@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Equipo</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Sistema Operativo</th>
                <th>RAM</th>
                <th>Disco Duro (GB)</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->marca->nombre }}</td>
                    <td>{{ $equipo->modelo->nombre }}</td>
                    <td>{{ $equipo->sistemaOperativo->nombre }} {{ $equipo->sistemaOperativo->version }}</td>
                    <td>{{ $equipo->ram }}</td>
                    <td>{{ $equipo->dd }}</td>
                    <td>
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
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
