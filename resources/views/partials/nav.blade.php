<nav>
    <ul>
        {{-- setActive se importa de helper.php y se declara por composer.json en la sección autload y ejecutar composer dumpautoload para compilacion--}}
        <li class="{{setActive('home')}}"><a href="{{route('home')}}">Home</a></li>
        <li class="{{setActive('about')}}"><a href="{{route('about')}}">About</a></li>
        <li class="{{setActive('projects.*')}}"><a href="{{route('projects.index')}}">Portfolio</a></li>
        <li class="{{setActive('contact')}}"><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>
