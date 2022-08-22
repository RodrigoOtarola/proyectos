@extends('layout')

@section('title', 'Project')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="display-4 mb-0">Portafolio</h2>
            @auth()
                <a class="btn btn-primary" href="{{route('projects.create')}}">Crear proyecto.</a>
            @endauth
        </div>
        <hr>
        <p class="lead text-secondary">Proyectos creados: Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Amet
            aperiam architecto culpa dicta dolorem doloribus ex facilis iusto minus, numquam odit praesentium qui
            quia
            quisquam vero. Aspernatur consectetur ipsam odio?</p>
        <ul class="list-group">
            @forelse($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between align-items-center"
                       href="{{route('projects.show', $project->id)}}">
                        <span class="font-weight-bold">
                        {{ $project->title}}
                        </span>
                        <span class="text-black-50">
                        {{$project->created_at->format('d/m/Y')}}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos para mostrar.
                </li>
            @endforelse
        </ul>
    </div>
@endsection
