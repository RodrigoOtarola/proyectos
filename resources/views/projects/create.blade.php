@extends('layout')

@section('title', 'Crear proyecto')

@section('container')
    <div class="container w-75">
        <div class="row">
            <div class="col-s12 col-sm-10 col-lg-12 mx-auto">

                @include('validaciones.error')

                <form class="bg-white py-3 px-3 shadow-sm rounded"
                      action="{{route('projects.store')}}" method="post">
                    @csrf
                    <h3 class="display-4">Nuevo proyecto:</h3>
                    <hr>
                    @include('projects._form',['btnText'=>'Guardar'])

                </form>
            </div>
        </div>
    </div>
@endsection
