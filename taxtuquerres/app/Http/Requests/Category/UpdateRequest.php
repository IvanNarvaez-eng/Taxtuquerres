<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name'=> 'required|string|max=50',
            'description'=> 'nullable|string|max=50',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'Elvalor no es correcto.',
            'name.max'=>'Solo se permiten 50 caracteres.',
            'description.string'=>'Elvalor no es correcto.',
            'description.max'=>'Solo se permiten 50 caracteres.',
        ];
    }
}
