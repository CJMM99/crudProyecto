<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\File;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all(); // Obtener todos los proyectos
    return view('proyectos.index', compact('projects')); // Pasar datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create'); // Retorna la vista para crear un proyecto    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Obtener un estudiante desde la base de datos (puedes usar un usuario específico o uno aleatorio)
    $student = User::where('rol', 'estudiante')->first();

    // Crear un nuevo proyecto con el estudiante asignado
    $project = Project::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'estudiante_id' => $student->id,  // Asignar el estudiante al proyecto
        'profesor_id' => $request->profesor_id, // Profesor puede ser proporcionado por el usuario
        'estado' => $request->estado,
    ]);

    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Buscar el proyecto por ID
    $project = \App\Models\Project::findOrFail($id);

    // Retornar la vista con el proyecto encontrado
    return view('proyectos.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          // Buscar el proyecto por ID
    $project = \App\Models\Project::findOrFail($id);

    // Retornar la vista con el proyecto para editar
    return view('proyectos.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validar los datos del formulario
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'estado' => 'required|in:activo,completado',
    ]);

    // Buscar el proyecto por ID
    $project = \App\Models\Project::findOrFail($id);

    // Actualizar los datos del proyecto
    $project->update($validatedData);

    // Redirigir al listado de proyectos con un mensaje de éxito
    return redirect()->route('proyectos.index')->with('success', '¡Proyecto actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Buscar el proyecto por ID
    $project = \App\Models\Project::findOrFail($id);

    // Eliminar el proyecto
    $project->delete();

    // Redirigir al listado de proyectos con un mensaje de éxito
    return redirect()->route('proyectos.index')->with('success', '¡Proyecto eliminado con éxito!');
    }
}