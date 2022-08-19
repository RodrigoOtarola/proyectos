@extends('layout')

@section('title', 'Inicio')

@section('container')
    <h2>Hola desde home</h2>

    @auth
    {{auth()->user()->name}}
    @endauth
@endsection
