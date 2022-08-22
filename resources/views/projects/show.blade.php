@extends('layout')

@section('title', $project->title)

@section('container')

    <div class="container w-75">
        <div class="bg-white p-5 shadow rounded">

            <h2>{{$project->title}}</h2>

            <p class="text-secondary">{{$project->description}}</p>

            <p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{route('projects.index')}}">Regresar</a>
                @auth()
                    <div class="btn-group btn-group-sm">
                        <a href="{{route('projects.edit', $project)}}" class="btn btn-warning">
                            Editar
                        </a>
                        <a href="#" onclick="document.getElementById('delete-project').onsubmit()"
                           class="btn btn-danger">
                            Eliminar
                        </a>
                    </div>
                    <form action="{{route('projects.destroy',$project)}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                @endauth()
            </div>
        </div>
    </div>
@endsection
