@extends('layout')

@section('title', 'Crear proyecto')

@section('container')

    <h2>Formulario</h2>

    @include('validaciones.error')

    <form action="{{route('projects.store')}}" method="post">
        @csrf
        <label>Título del proyecto:
            <input type="text" name="title">
        </label><br>

        <label>Descripción del proyecto:
            <textarea name="description"></textarea>
        </label><br><br>

        <button>Guardar</button>
    </form>

@endsection
