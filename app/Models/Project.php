<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['image','category_id','title','description'];

//    public function getRouteKeyName()
//    {
//        return 'title';
//    }

    //Relacion con modelo Category, 1:1, por defecto ocupara category_id

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
