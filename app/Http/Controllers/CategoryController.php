<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('projects.index',[
            'category'=>$category,
            'newProject' => new Project,
            'projects'=>$category->projects()->with('category')->latest()->paginate(3)
        ]);
    }
}
