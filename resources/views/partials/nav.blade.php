<nav class="navbar navbar-expand-md bg-white shadow-sm">

    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <ul class="nav nav-pills">
                {{-- setActive se importa de helper.php y se declara por composer.json en la sección autload y ejecutar composer dumpautoload para compilacion--}}
                <li class="nav-item"><a class="nav-link {{setActive('home')}}" href="{{route('home')}}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{setActive('about')}}" href="{{route('about')}}">Quienes somos</a></li>
                <li class="nav-item"><a class="nav-link {{setActive('projects.*')}}" href="{{route('projects.index')}}">Portafolio</a>
                </li>
                <li class="nav-item"><a class="nav-link {{setActive('contact')}}" href="{{route('contact')}}">Contacto</a></li>

                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link {{setActive('login')}}" href="{{route('login')}}">Login</a></li>
                @endauth
            </ul>
    </div>


</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
