@if($project->image)
    <img src="/storage/{{$project->image}}" class="card-img-top" alt="{{$project->title}}"
         style="height: 250px;object-fit: cover">
@endif

<div class="custom-file mb-3">
    <label for="formFile" class="form-label">Imagen: </label>
    <input class="form-control" type="file" id="formFile" name="image">
</div>
<div class="form-group">
    <label for="category_id">Categoria</label>
    <select name="category_id" id="category_id" class="form-control border-0 bg-light shadow-sm">
        <option value="">Seleccione</option>
        {{--Para tomar valores de id y name--}}
        @foreach($categories as $id => $name)
            <option value="{{$id}}"
                    {{--                En edit recuperar el valor seleccionado--}}
                    {{--                {{$id == $project->category_id ? 'selected' : ''}}>--}}
                    {{--                --}}
                    @if($id == old('category_id', $project->category_id)) selected @endif
            >
                {{$name}}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label class="title">Título del proyecto:</label>
    <input class="form-control border-0 bg-light shadow-sm"
           type="text" id="title" name="title" value="{{old('title',$project->title)}}">
</div>
<div class="form-group">
    <label for="description">Descripción del proyecto:</label>
    <textarea class="form-control border-0 shadow-sm"
              name="description" id="descripction">{{old('description',$project->description)}}</textarea>
    <br>
</div>
<button class="btn btn-primary btn-lg w-100">{{$btnText}}</button>
<a href="{{route('projects.index')}}"
   class="btn btn-warning w-100">
    Cancelar
</a>
