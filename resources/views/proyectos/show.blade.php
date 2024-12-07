@extends('layouts.app')

@section('title', 'Detalles del Proyecto')

@section('content')
    <h1 class="my-4">{{ $project->nombre }}</h1>
    
    <p><strong>Descripción:</strong> {{ $project->descripcion }}</p>
    <p><strong>Estado:</strong> {{ $project->estado }}</p>
    
    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
@endsection
