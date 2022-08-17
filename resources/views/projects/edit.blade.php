<h2>Editar proyecto:</h2>

<form action="{{route('projects.update', $project)}}" method="post">
    @csrf
    @method('PUT')

    <label>Título del proyecto:
        <input type="text" name="title" value="{{old('title',$project->title)}}">
    </label><br>

    <label>Descripción del proyecto:
        <textarea name="description">{{old('title',$project->description)}}</textarea>
    </label><br><br>

    <button>Actualizar</button>

</form>
