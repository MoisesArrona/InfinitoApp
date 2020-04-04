<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:150', 'email'],
            'password' => ['required', 'max:150'],
            'foto' => ['file', 'mimes:jpeg,bmp,png'],
            'descripcion' => ['max:50'],
            'id_rol' => ['required', 'integer'],
            'id_empresa' => ['required', 'integer'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El campo :attribute es obligatorio',
            'name.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'email.required' => 'El campo :attribute es obligatorio',
            'email.max' => 'El campo :attribute debe tener maximo 150 caracteres',
            'email.email' => 'El campo :attribute debe ser correo',

            'password.required' => 'El campo :attribute es obligatorio',
            'password.max' => 'El campo :attribute debe tener maximo 150 caracteres',

            'foto.required' => 'El campo :attribute es obligatorio',
            'foto.mimes' => 'Añade una imagen jpeg o png',

            'descripcion.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'id_rol.required' => 'El campo :attribute es obligatorio',
            'id_rol.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'id_empresa.required' => 'El campo :attribute es obligatorio',
            'id_empresa.max' => 'El campo :attribute debe tener maximo 50 caracteres',
        ];
    }
}
