@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Resumen del Inventario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Totales Generales -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card bg-primary text-white text-center">
                                <div class="card-body">
                                    <h4>Total de Equipos</h4>
                                    <h2>{{ $totalEquipos }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success text-white text-center">
                                <div class="card-body">
                                    <h4>Total de Gadgets</h4>
                                    <h2>{{ $totalGadgets }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning text-white text-center">
                                <div class="card-body">
                                    <h4>Solicitudes Abiertas</h4>
                                    <h2>{{ $solicitudesAbiertas }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-danger text-white text-center">
                                <div class="card-body">
                                    <h4>Alertas Pendientes</h4>
                                    <h2>{{ $alertasPendientes }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabla de Detalles del Inventario -->
                    <div class="card my-4">
                        <div class="card-header bg-dark text-white">
                            <h5>Detalles del Inventario</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tipo de Elemento</th>
                                        <th>Total</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Equipos</td>
                                        <td>{{ $totalEquipos }}</td>
                                        <td>Total de equipos registrados en el inventario.</td>
                                    </tr>
                                    <tr>
                                        <td>Gadgets</td>
                                        <td>{{ $totalGadgets }}</td>
                                        <td>Total de gadgets (teclados, mouses, cámaras, etc.) en el inventario.</td>
                                    </tr>
                                    <tr>
                                        <td>Solicitudes de Servicio Abiertas</td>
                                        <td>{{ $solicitudesAbiertas }}</td>
                                        <td>Solicitudes de servicio que están en estado "abierto".</td>
                                    </tr>
                                    <tr>
                                        <td>Alertas Pendientes</td>
                                        <td>{{ $alertasPendientes }}</td>
                                        <td>Alertas activas o pendientes de resolución.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
