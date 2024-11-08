<?php

namespace App\Http\Controllers;

use App\Alertas;
use Illuminate\Http\Request;

class AlertasController extends Controller
{
    // Mostrar lista de alertas
    public function index()
    {
        $alertas = Alertas::all();
        return view('alertas.index', compact('alertas'));
    }

    // Mostrar detalles de una alerta específica
    public function show($id)
    {
        $alerta = Alertas::findOrFail($id);
        return view('alertas.show', compact('alerta'));
    }

    // Actualizar el estado de una alerta a "resuelta"
    public function update(Request $request, $id)
    {
        $alerta = Alertas::findOrFail($id);

        $alerta->update([
            'estado' => 'resuelta'
        ]);

        return redirect()->route('alertas.index')->with('success', 'Alerta marcada como resuelta.');
    }
}
