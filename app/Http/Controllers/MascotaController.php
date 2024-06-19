<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::with('cliente')->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('mascotas.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'fecha_nacimiento' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        Mascota::create($request->all());

        return redirect()->route('mascotas.index')
                         ->with('success', 'Mascota creada correctamente.');
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        $clientes = Cliente::all();
        return view('mascotas.edit', compact('mascota', 'clientes'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'especie' => 'required',
            'raza' => 'required',
            'fecha_nacimiento' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $mascota->update($request->all());

        return redirect()->route('mascotas.index')
                         ->with('success', 'Mascota actualizada correctamente.');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return redirect()->route('mascotas.index')
                         ->with('success', 'Mascota eliminada correctamente.');
    }
}
