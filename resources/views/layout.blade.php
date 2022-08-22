<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>

    <style>
        a {
            color: red;
            text-decoration: none;
        }
        .h-screen{
            height: 100%;
        }
    </style>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('partials.nav')

        @include('partials.session-status')
    </header>
    <main class="py-3">
        @yield('container')
        <br>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{config('app.name')}} | Copyright @ {{date('Y')}}
    </footer>
</div>
</body>
</html>
