@extends('layout')

@section('title', $project->title)

@section('container')

    <h2>{{$project->title}}</h2>

    <p>{{$project->description}}</p>

    <p>{{$project->created_at->diffForHumans()}}</p>

    <a href="{{route('projects.edit', $project)}}">Editar</a>

    <form action="{{route('projects.destroy',$project)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
    </form>

@endsection
