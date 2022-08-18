@extends('layout')

@section('title', 'Contact')

@section('container')

    <h2>Hola desde Contact</h2>

    @include('validaciones.error')

    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nombre"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="subject" placeholder="Asunto"><br>
        <textarea name="content" placeholder="mensaje"></textarea><br>
        <button>Enviar</button>
    </form>

@endsection
