@extends('layout')

@section('title', 'Project')

@section('container')
    <h2>Hola desde portafolio</h2>

    @auth()
        <button><a href="{{route('projects.create')}}">Crear proyecto.</a></button>
    @endauth

    <ul>
        @forelse($projects as $project)
            <li><a href="{{route('projects.show', $project->id)}}">{{ $project->title}}</a></li>
        @empty
            <li>No hay proyectos para mostrar.</li>
        @endforelse
    </ul>
@endsection
