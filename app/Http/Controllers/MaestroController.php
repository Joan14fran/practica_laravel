<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maestro;
use Illuminate\Support\Facades\Storage;


class MaestroController extends Controller
{

    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros.index', compact('maestros'));
    }

    public function create()
    {
        return view('maestros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'facultad' => 'required|string|max:255',
            'materia' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotos', 'public');
        }

        Maestro::create([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'facultad' => $request->facultad,
            'materia' => $request->materia,
            'foto' => $path,
        ]);

        return redirect()->route('maestros.index')->with('success', 'Maestro creado correctamente.');
    }

    public function show(string $id)
    {
        $maestro = Maestro::findOrFail($id);
        return view('maestros.show', compact('maestro'));
    }

    public function edit(string $id)
    {
        $maestro = Maestro::findOrFail($id);
        return view('maestros.edit', compact('maestro'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'facultad' => 'required|string|max:255',
            'materia' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $maestro = Maestro::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Elimina la foto anterior si existe
            if ($maestro->foto) {
                Storage::disk('public')->delete($maestro->foto);
            }
            $maestro->foto = $request->file('foto')->store('fotos', 'public');
        }

        $maestro->update($request->only(['nombre', 'edad', 'facultad', 'materia']));

        return redirect()->route('maestros.index')->with('success', 'Maestro actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $maestro = Maestro::findOrFail($id);
        $maestro->delete();

        return redirect()->route('maestros.index');
    }
}
