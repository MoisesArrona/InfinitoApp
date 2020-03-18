<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProveedorGuardarRequest extends FormRequest
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
            'empresa' => ['required', Rule::unique('proveedores', 'empresa')->ignore($this->proveedor), 'max:50'],
            'contacto' => ['required', 'max:50'],
            'telefono' => ['required', 'max:50'],
            'correo' => ['required', 'max:100'],
            'web' => ['required', 'max:50'],
            'domicilio' => ['required', 'max:100'],
        ];
    }

    public function messages(){
        return [
            'empresa.required' => 'El campo :attribute es obligatorio',
            'empresa.unique' => 'Ya existe un proveedor con el mismo nombre',
            'empresa.max' => 'El campo :attribute debe tener maximo 50 caracteres',
            
            'contacto.required' => 'El campo :attribute es obligatorio',
            'contacto.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'telefono.required' => 'El campo :attribute es obligatorio',
            'telefono.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'correo.required' => 'El campo :attribute es obligatorio',
            'correo.max' => 'El campo :attribute debe tener maximo 100 caracteres',

            'web.required' => 'El campo :attribute es obligatorio',
            'web.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'domicilio.required' => 'El campo :attribute es obligatorio',
            'domicilio.max' => 'El campo :attribute debe tener maximo 50 caractere',
        ];
    }
}
