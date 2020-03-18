<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TipoGuardarRequest extends FormRequest
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
            'nombre' => ['required', Rule::unique('tipos', 'nombre')->ignore($this->tipo), 'max:50'],
            'descripcion' => ['required', 'max:150'],
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El campo :attribute es obligatorio',
            'nombre.unique' => 'Ya existe un tipo de producto con el mismo nombre',
            'nombre.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'descripcion.required' => 'El campo :attribute es obligatorio',
            'descripcion.max' => 'El campo :attribute debe tener maximo 150 caracteres',
        ];
    }
}
