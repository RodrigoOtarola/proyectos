<label>Título del proyecto:
    <input type="text" name="title" value="{{old('title',$project->title)}}">
</label><br>

<label>Descripción del proyecto:
    <textarea name="description">{{old('title',$project->description)}}</textarea>
</label><br><br>
<button>{{$btnText}}</button>
