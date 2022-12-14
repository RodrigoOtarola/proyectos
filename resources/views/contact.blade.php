@extends('layout')

@section('title', 'Contact')

@section('container')
    &nbsp;
    <div class="container w-75">
        <div class="row">
            <div class="col-s12 col-sm-10 col-lg-12 mx-auto">

                {{--        @include('validaciones.error')--}}

                <form action="{{route('contact')}}" method="post" class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h3 class="display-4">Formulario:</h3>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm
                @error('name')
                            is-invalid
@else
                            border-0
@enderror" type="text" id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm
                @error('email')
                            is-invalid
@else
                            border-0
@enderror" type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm
                @error('subject')
                            is-invalid
@else
                            border-0
@enderror" type="text" id="subject" name="subject" placeholder="Asunto" value="{{old('subject')}}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <input class="form-control bg-light shadow-sm
                @error('content')
                            is-invalid
@else
                            border-0
@enderror" type="text" id="content" name="content" placeholder="Mensaje" value="{{old('content')}}">
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 btn-lg ">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
