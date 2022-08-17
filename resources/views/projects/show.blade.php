@extends('layout')

@section('title', $project->title)

@section('container')

    <h2>{{$project->title}}</h2>

    <p>{{$project->description}}</p>

    <p>{{$project->created_at->diffForHumans()}}</p>

@endsection
