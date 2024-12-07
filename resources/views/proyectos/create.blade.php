@extends('layouts.app')

@section('title', 'Crear Proyecto')

@section('content')
    <h1 class="my-4">Crear Proyecto</h1>

    <form action="{{ route('proyectos.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Proyecto</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select">
                <option value="activo">Activo</option>
                <option value="completado">Completado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar Proyecto</button>
    </form>
@endsection
