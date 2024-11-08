<?php

namespace App\Http\Controllers;

use App\Gadgets;
use App\Marca;
use App\Modelo;
use Illuminate\Http\Request;

class GadgetsController extends Controller
{
    // Mostrar lista de gadgets
    public function index()
    {
        $gadgets = Gadgets::all();
        return view('gadgets.index', compact('gadgets'));
    }

    // Mostrar formulario de creación de gadget
    public function create()
    {
        $marcas = Marca::all();
        $modelos = Modelo::all();
        return view('gadgets.create', compact('marcas', 'modelos'));
    }

    // Almacenar un nuevo gadget
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'resa' => 'nullable|string|max:20',
            'numero_serie' => 'required|string|max:50',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
        ]);

        Gadgets::create($data);

        return redirect()->route('gadgets.index')->with('success', 'Gadget creado exitosamente.');
    }

    // Mostrar detalles de un gadget específico
    public function show($id)
    {
        $gadget = Gadgets::findOrFail($id);
        return view('gadgets.show', compact('gadget'));
    }

    // Mostrar formulario de edición de gadget
    public function edit($id)
    {
        $gadget = Gadgets::findOrFail($id);
        $marcas = Marca::all();
        $modelos = Modelo::all();
        return view('gadgets.edit', compact('gadget', 'marcas', 'modelos'));
    }

    // Actualizar un gadget existente
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:100',
            'resa' => 'nullable|string|max:20',
            'numero_serie' => 'required|string|max:50',
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
        ]);

        $gadget = Gadgets::findOrFail($id);
        $gadget->update($data);

        return redirect()->route('gadgets.index')->with('success', 'Gadget actualizado exitosamente.');
    }

    // Eliminar un gadget
    public function destroy($id)
    {
        $gadget = Gadgets::findOrFail($id);
        $gadget->delete();

        return redirect()->route('gadgets.index')->with('success', 'Gadget eliminado exitosamente.');
    }
}
