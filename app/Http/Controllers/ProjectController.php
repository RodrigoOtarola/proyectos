<?php

namespace App\Http\Controllers;

use App\Event\ProjectSaved;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with('category')->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create-projects');
        return view('projects.create', [
            'project' => new Project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        $project = new Project($request->validated());

        //Mover imagen de directorio temporal a carpeta del server
        $project->image = $request->file('image')->store('images');

        $project->save();

//        //Optimizar imagen, storage_path para la ruta de la foto.
//        $image = Image::make(Storage::get($project->image))
//            ->widen(600)
//            ->limitColors(255)
//            ->encode();
//
//        Storage::put($project->image,(string)$image);

        ProjectSaved::dispatch($project);


        return redirect()->route('projects.index')->with('Proyecto creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.show', ['project' => $project]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        if ($request->hasFile('image')) {

            //Para eliminar imagen anterior si, se actualiza imagen.

            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();

//            //Optimizar imagen, storage_path para la ruta de la foto.
//            $image = Image::make(Storage::get($project->image))
//                ->widen(600)
//                ->limitColors(255)
//                ->encode();
//
//            Storage::put($project->image,(string)$image);
//
            ProjectSaved::dispatch($project);

        } else {
            //Para no actualizar la foto
            $project->update(array_filter($request->validated()));
        }
        return redirect()->route('projects.show', $project)
            ->with('status', 'El proyecto fue actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'Proyecto eliminado con exito');
    }
}
