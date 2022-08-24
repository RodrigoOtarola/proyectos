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
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            @forelse($projects as $project)
                <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                    @if($project->image)
                        <img src="/storage/{{$project->image}}" class="card-img-top" alt="{{$project->title}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{route('projects.show',$project)}}">{{$project->title}}</a>
                        </h5>
                        <h6 class="card-subtitle">{{$project->created_at->format('d/m/Y')}}</h6>
                        <p class="card-text text-truncate">{{$project->description}}</p>
                        <a href="{{route('projects.show',$project)}}" class="btn btn-primary">Ver más....</a>
                    </div>
                </div>
            @empty
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">No hay proyectos para mostrar.</h5>
                    </div>
                </div>
            @endforelse

        </div>
        <div class="mt-4">
            {{$projects->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
