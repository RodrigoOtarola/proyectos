@extends('layout')

@section('title', 'Editar')

@section('container')
    <div class="container w-75">
        <div class="row">
            <div class="col-s12 col-sm-10 col-lg-12 mx-auto">
                <form action="{{route('projects.update', $project)}}" method="post"
                      class="bg-white py-3 px-4 shadow rounded" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="display-4">Editar proyecto:</h3>
                    <hr>
                    @include('projects._form',['btnText'=>'Actualizar'])

                </form>
            </div>
        </div>
    </div>
@endsection
