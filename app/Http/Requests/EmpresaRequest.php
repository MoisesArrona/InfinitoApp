<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmpresaRequest extends FormRequest
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
            'nombre' => ['required', Rule::unique('empresas', 'nombre')->ignore($this->empresa), 'max:50'],
            'telefono' => ['required', 'max:50'],
            'correo' => ['required', 'max:50', 'email'],
            'web' => ['required', 'max:50'],
            'domicilio' => ['required', 'max:150'],
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El campo :attribute es obligatorio',
            'nombre.unique' => 'Ya existe una empresa dcon el mismo nombre',
            'nombre.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'telefono.required' => 'El campo :attribute es obligatorio',
            'telefono.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'correo.required' => 'El campo :attribute es obligatorio',
            'correo.max' => 'El campo :attribute debe tener maximo 50 caracteres',
            'correo.email' => 'El campo :attribute debe ser correo',

            'web.required' => 'El campo :attribute es obligatorio',
            'web.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'domicilio.required' => 'El campo :attribute es obligatorio',
            'domicilio.max' => 'El campo :attribute debe tener maximo 50 caracteres',
        ];
    }
}
