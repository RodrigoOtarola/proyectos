<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getRouteKeyName(){
        return 'title';
    }

    //Relacion modelo projects 1:n, una categoria puede tener muchos proyectos
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
