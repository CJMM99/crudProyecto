@extends('layouts.app')

@section('title', 'Lista de Proyectos')

@section('content')
    <h1 class="my-4">Lista de Proyectos</h1>

    <a href="{{ route('proyectos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Proyecto</a>

    @if ($projects->isEmpty())
        <div class="alert alert-warning">No hay proyectos disponibles.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->nombre }}</td>
                        <td>{{ $project->estado }}</td>
                        <td>
                            <a href="{{ route('proyectos.show', $project) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('proyectos.edit', $project) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('proyectos.destroy', $project) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
