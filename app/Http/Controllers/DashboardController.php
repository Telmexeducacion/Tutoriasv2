<?php

namespace App\Http\Controllers;

use App\Equipos;
use App\Gadgets;
use App\SolicitudesServicio;

use App\Alertas;

class DashboardController extends Controller
{
    public function index()
    {
        // Recoger los totales
        $totalEquipos = Equipos::count();
        $totalGadgets = Gadgets::count();
        $solicitudesAbiertas = SolicitudesServicio::where('estado', 'abierto')->count();
        $alertasPendientes = Alertas::where('estado', 'pendiente')->count();

        // Pasar los datos a la vista
        return view('dashboard.index', compact('totalEquipos', 'totalGadgets', 'solicitudesAbiertas', 'alertasPendientes'));
    }
}

