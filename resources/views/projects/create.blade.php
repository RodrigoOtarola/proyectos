@extends('layout')

@section('title', 'Crear proyecto')

@section('container')

    <h2>Formulario</h2>

    @include('validaciones.error')

    <form action="{{route('projects.store')}}" method="post">
        @csrf

        @include('projects._form',['btnText'=>'Guardar'])

    </form>

@endsection
