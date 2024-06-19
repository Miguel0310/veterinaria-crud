<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    public function index()
    {
        $tratamientos = Tratamiento::with('cita')->get();
        return view('tratamientos.index', compact('tratamientos'));
    }

    public function create()
    {
        $citas = Cita::all();
        return view('tratamientos.create', compact('citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cita_id' => 'required|exists:citas,id',
            'descripcion' => 'required',
            'costo' => 'required|numeric',
        ]);

        Tratamiento::create($request->all());

        return redirect()->route('tratamientos.index')
                         ->with('success', 'Tratamiento creado correctamente.');
    }

    public function show(Tratamiento $tratamiento)
    {
        return view('tratamientos.show', compact('tratamiento'));
    }

    public function edit(Tratamiento $tratamiento)
    {
        $citas = Cita::all();
        return view('tratamientos.edit', compact('tratamiento', 'citas'));
    }

    public function update(Request $request, Tratamiento $tratamiento)
    {
        $request->validate([
            'cita_id' => 'required|exists:citas,id',
            'descripcion' => 'required',
            'costo' => 'required|numeric',
        ]);

        $tratamiento->update($request->all());

        return redirect()->route('tratamientos.index')
                         ->with('success', 'Tratamiento actualizado correctamente.');
    }

    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();

        return redirect()->route('tratamientos.index')
                         ->with('success', 'Tratamiento eliminado correctamente.');
    }
}
