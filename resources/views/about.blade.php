@extends('layout')

@section('title', 'About')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="/img/about.svg" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="display-4 text-primary">Quienes somos.</h2>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, culpa cum dignissimos ducimus minus
                    obcaecati quae sit vitae. A commodi corporis deleniti exercitationem iusto mollitia possimus
                    recusandae repellendus sunt voluptates?
                </p>
                <a class="btn btn-lg btn-outline-primary" href="{{route('contact')}}">
                    Contactanos
                </a>
                <a class="btn btn-lg btn-outline-primary" href="{{route('projects.index')}}">
                    Portafolio
                </a>
            </div>

        </div>
    </div>
@endsection
