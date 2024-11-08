<?php

namespace App\Http\Controllers;

use App\SolicitudesServicio;
use App\Sede;
use App\Equipos;
use App\Gadgets;
use App\HistorialProgresoSolicitud;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    // Mostrar lista de solicitudes
    public function index()
    {
        $solicitudes = SolicitudesServicio::all();
        return view('solicitudes.index', compact('solicitudes'));
    }

    // Mostrar formulario de creación de solicitud
    public function create()
    {
        $sedes = Sede::all();
        $equipos = Equipos::all();
        $gadgets = Gadgets::all();
        return view('solicitudes.create', compact('sedes', 'equipos', 'gadgets'));
    }

    // Almacenar una nueva solicitud
    public function store(Request $request)
    {
        $data = $request->validate([
            'equipo_id' => 'nullable|exists:equipos,id',
            'sede_id' => 'required|exists:sedes,id',
            'gadget_id' => 'nullable|exists:gadgets,id',
            'descripcion' => 'required|string',
            'estado' => 'required|in:abierto,en progreso,cerrado',
            'codigo_aprobacion' => 'nullable|string|max:20',
            'fecha_apertura' => 'required|date',
            'fecha_cierre' => 'nullable|date',
        ]);

        SolicitudesServicio::create($data);

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de servicio creada exitosamente.');
    }

    // Mostrar detalles de una solicitud específica y su historial de progreso
    public function show($id)
    {
        $solicitud = SolicitudesServicio::findOrFail($id);
        $historial = HistorialProgresoSolicitud::where('solicitud_id', $id)->get();
        return view('solicitudes.show', compact('solicitud', 'historial'));
    }

    // Mostrar formulario de edición de solicitud
    public function edit($id)
    {
        $solicitud = SolicitudesServicio::findOrFail($id);
        $sedes = Sede::all();
        $equipos = Equipos::all();
        $gadgets = Gadgets::all();
        return view('solicitudes.edit', compact('solicitud', 'sedes', 'equipos', 'gadgets'));
    }

    // Actualizar una solicitud existente
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'equipo_id' => 'nullable|exists:equipos,id',
            'sede_id' => 'required|exists:sedes,id',
            'gadget_id' => 'nullable|exists:gadgets,id',
            'descripcion' => 'required|string',
            'estado' => 'required|in:abierto,en progreso,cerrado',
            'codigo_aprobacion' => 'nullable|string|max:20',
            'fecha_apertura' => 'required|date',
            'fecha_cierre' => 'nullable|date',
        ]);

        $solicitud = SolicitudesServicio::findOrFail($id);
        $solicitud->update($data);

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de servicio actualizada exitosamente.');
    }

    // Eliminar una solicitud
    public function destroy($id)
    {
        $solicitud = SolicitudesServicio::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('solicitudes.index')->with('success', 'Solicitud de servicio eliminada exitosamente.');
    }

    // Añadir comentario de progreso a una solicitud específica
    public function addProgress(Request $request, $id)
    {
        $data = $request->validate([
            'fecha' => 'required|date',
            'comentario' => 'required|string',
            'tema_garantia' => 'nullable|boolean',
        ]);

        $data['solicitud_id'] = $id;

        HistorialProgresoSolicitud::create($data);

        return redirect()->route('solicitudes.show', $id)->with('success', 'Progreso añadido a la solicitud.');
    }

    // Ver el historial de progreso de una solicitud
    public function viewProgress($id)
    {
        $solicitud = SolicitudesServicio::findOrFail($id);
        $historial = $solicitud->historialProgreso;
        return view('solicitudes.progress', compact('solicitud', 'historial'));
    }
}
