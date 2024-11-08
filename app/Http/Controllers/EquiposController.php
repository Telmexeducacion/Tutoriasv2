<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Marca;
use App\Modelo;
use App\Sede;
use App\SistemasOperativos;
use Illuminate\Http\Request;

class EquiposController extends Controller{

    public function index()
{
    $equipos = Equipos::all();
    return view('equipos.index', compact('equipos'));
}


public function create()
{
    $marcas = Marca::all();
    $modelos = Modelo::all();
    $sistemasOperativos = SistemasOperativos::all();
    $sedes = Sede::all();
    return view('equipos.create', compact('marcas', 'modelos', 'sistemasOperativos', 'sedes'));
}

public function store(Request $request)
{
    $data = $request->validate([
        'nombre' => 'required|string|max:100',
        'resa' => 'nullable|string|max:20',
        'serie' => 'required|string|max:50',
        'marca_id' => 'required|exists:marcas,id',
        'modelo_id' => 'required|exists:modelos,id',
        'procesador' => 'required|string|max:50',
        'velocidad_procesador' => 'required|string|max:20',
        'ram' => 'required|integer',
        'dd' => 'nullable|integer',
        'sistema_operativo_id' => 'required|exists:sistemas_operativos,id',
        'sede_id' => 'required|exists:sedes,id',
    ]);
    Equipos::create($data);
    return redirect()->route('equipos.index')->with('success', 'Equipo creado exitosamente.');
}

public function show($id)
{
    $equipo = Equipos::findOrFail($id);
    return view('equipos.show', compact('equipo'));
}

public function edit($id)
{
    $equipo = Equipos::findOrFail($id);
    $marcas = Marca::all();
    $modelos = Modelo::all();
    $sistemasOperativos = SistemasOperativos::all();
    $sedes = Sede::all();
    return view('equipos.edit', compact('equipo', 'marcas', 'modelos', 'sistemasOperativos', 'sedes'));
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'nombre' => 'required|string|max:100',
        'resa' => 'nullable|string|max:20',
        'serie' => 'required|string|max:50',
        'marca_id' => 'required|exists:marcas,id',
        'modelo_id' => 'required|exists:modelos,id',
        'procesador' => 'required|string|max:50',
        'velocidad_procesador' => 'required|string|max:20',
        'ram' => 'required|integer',
        'dd' => 'nullable|integer',
        'sistema_operativo_id' => 'required|exists:sistemas_operativos,id',
        'sede_id' => 'required|exists:sedes,id',
    ]);
    $equipo = Equipos::findOrFail($id);
    $equipo->update($data);
    return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
}



}
