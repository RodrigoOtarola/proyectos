<h2>Editar proyecto:</h2>

<form action="{{route('projects.update', $project)}}" method="post">
    @csrf
    @method('PUT')

    @include('projects._form',['btnText'=>'Actualizar'])

</form>
