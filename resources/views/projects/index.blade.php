@extends('layout')

@section('title', 'Project')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            @isset($category)
                <div>
                    <h2 class="display-4 mb-0">{{$category->name}}</h2>
                    <a href="{{route('projects.index')}}" class="btn btn-outline-primary btn-sm">Regresar al
                        portafolio</a>
                </div>
            @else
                <h2 class="display-4 mb-0">Portafolio</h2>
            @endisset
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
                        <img src="/storage/{{$project->image}}" class="card-img-top" alt="{{$project->title}}"
                             style="height: 150px;object-fit: cover">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{route('projects.show',$project)}}">{{$project->title}}</a>
                        </h5>
                        <h6 class="card-subtitle">{{$project->created_at->format('d/m/Y')}}</h6>
                        <p class="card-text text-truncate">{{$project->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('projects.show',$project)}}" class="btn btn-primary">Ver más....</a>

                            {{--Para mostrar titulo de la categoria--}}
                            @if($project->category_id)
                                {{--Para realizar filtro por categoria--}}
                                <a href="{{route('categories.show',$project->category)}}">
                                    <span class="badge bg-secondary">{{$project->category->name}}</span>
                                </a>
                            @endif
                        </div>
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
