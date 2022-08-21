@extends('layout')

@section('title', 'Project')

@section('container')
    <div class="container">
        <h2 class="display-4">Portafolio</h2>

        @auth()
            <button><a href="{{route('projects.create')}}">Crear proyecto.</a></button>
        @endauth

        <ul class="list-group">
            @forelse($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex" href="{{route('projects.show', $project->id)}}">
                        {{ $project->title}}
                        {{$project->created_at->format('d/m/Y')}}
                    </a>
                </li>
            @empty
                <li>No hay proyectos para mostrar.</li>
            @endforelse
        </ul>
    </div>
@endsection
