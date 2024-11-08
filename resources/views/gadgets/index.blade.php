@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Perifericos</h1>
    <a href="{{ route('gadgets.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Gadget</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gadgets as $gadget)
                <tr>
                    <td>{{ $gadget->nombre }}</td>
                    <td>{{ $gadget->marca->nombre }}</td>
                    <td>{{ $gadget->modelo->nombre }}</td>
                    <td>{{ $gadget->numero_serie }}</td>
                    <td>
                        <a href="{{ route('gadgets.show', $gadget->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('gadgets.edit', $gadget->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline;">
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
