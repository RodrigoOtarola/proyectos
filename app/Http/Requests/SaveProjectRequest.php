<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return Gate::allows('create-projects');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //para subir png, jpeg, bmp, gif, svg o webp, con mime:jpeg,png se puede pasar los tipos de formato.
            'image'=>[$this->route('project') ? 'nullable' : 'required','image','dimensions:min_width=300,height:300','max:2000'],
            'category_id'=>['required','exists:categories,id'],
            'title'=> 'required',
            'description'=>'required'
        ];
    }
}
