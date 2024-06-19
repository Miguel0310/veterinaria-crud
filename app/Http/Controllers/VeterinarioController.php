<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index()
    {
        $veterinarios = Veterinario::all();
        return view('veterinarios.index', compact('veterinarios'));
    }

    public function create()
    {
        return view('veterinarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'telefono' => 'required',
        ]);

        Veterinario::create($request->all());

        return redirect()->route('veterinarios.index')
                         ->with('success', 'Veterinario creado correctamente.');
    }

    public function show(Veterinario $veterinario)
    {
        return view('veterinarios.show', compact('veterinario'));
    }

    public function edit(Veterinario $veterinario)
    {
        return view('veterinarios.edit', compact('veterinario'));
    }

    public function update(Request $request, Veterinario $veterinario)
    {
        $request->validate([
            'nombre' => 'required',
            'especialidad' => 'required',
            'telefono' => 'required',
        ]);

        $veterinario->update($request->all());

        return redirect()->route('veterinarios.index')
                         ->with('success', 'Veterinario actualizado correctamente.');
    }

    public function destroy(Veterinario $veterinario)
    {
        $veterinario->delete();

        return redirect()->route('veterinarios.index')
                         ->with('success', 'Veterinario eliminado correctamente.');
    }
}
