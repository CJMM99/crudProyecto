@extends('layouts.app')

@section('title', 'Editar Proyecto')

@section('content')
    <h1 class="my-4">Editar Proyecto: {{ $project->nombre }}</h1>

    <form action="{{ route('proyectos.update', $project) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT') <!-- Método PUT para actualizar -->

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proyecto</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $project->nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" rows="4" required>{{ old('descripcion', $project->descripcion) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select">
                <option value="activo" {{ $project->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="completado" {{ $project->estado == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar Proyecto</button>
    </form>
    
    
@endsection
