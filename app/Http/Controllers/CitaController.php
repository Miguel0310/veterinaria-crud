<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::with(['mascota', 'veterinario'])->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $mascotas = Mascota::all();
        $veterinarios = Veterinario::all();
        return view('citas.create', compact('mascotas', 'veterinarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'veterinario_id' => 'required|exists:veterinarios,id',
            'fecha_hora' => 'required|date_format:Y-m-d H:i:s',
            'motivo' => 'required',
        ]);

        Cita::create($request->all());

        return redirect()->route('citas.index')
                         ->with('success', 'Cita creada correctamente.');
    }

    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        $mascotas = Mascota::all();
        $veterinarios = Veterinario::all();
        return view('citas.edit', compact('cita', 'mascotas', 'veterinarios'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'veterinario_id' => 'required|exists:veterinarios,id',
            'fecha_hora' => 'required|date_format:Y-m-d H:i:s',
            'motivo' => 'required',
        ]);

        $cita->update($request->all());

        return redirect()->route('citas.index')
                         ->with('success', 'Cita actualizada correctamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('citas.index')
                         ->with('success', 'Cita eliminada correctamente.');
    }
}
