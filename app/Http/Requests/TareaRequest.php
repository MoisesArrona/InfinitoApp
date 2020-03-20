<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nombre' => ['required', 'max:50'],
            'descripcion' => ['required', 'max:50'],
            'estatus' => ['required', 'max:50'],
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El campo :attribute es obligatorio',
            'nombre.max' => 'El campo :attribute debe tener maximo 50 caracteres',
            
            'descripcion.required' => 'El campo :attribute es obligatorio',
            'descripcion.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'estatus.required' => 'El campo :attribute es obligatorio',
            'estatus.max' => 'El campo :attribute debe tener maximo 50 caracteres',
        ];
    }
}
