@extends('layout')

@section('title', 'Project')

@section('container')
    <h2>Hola desde portfolio</h2>

    <ul>
        @forelse($projects as $project)
            <li><a href="{{route('projects.show', $project->id)}}">{{ $project->title}}</a></li>
        @empty
            <li>No hay proyectos para mostrar.</li>
        @endforelse
    </ul>
@endsection
