<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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
            'equipo' => ['required', 'max:50'],
            'modelo' => ['required', 'max:50'],
            'nombre' => ['required', 'max:50'],
            'so' => ['required', 'max:50'],
            'procesador' => ['required', 'max:50'],
            'ram' => ['required', 'max:50'],
            'dominio' => ['required', 'max:50'],
            'ipv4' => ['required', 'max:150'],
            'puerto' => ['required', 'max:50'],
            'usuario' => ['required', 'max:50'],
            'contraseña' => ['required', 'max:50'],
            'equipo' => ['required', 'max:50'],
        ];
    }

    public function messages(){
        return[
            'equipo.required' => 'El campo :attribute es obligatorio',
            'equipo.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'modelo.required' => 'El campo :attribute es obligatorio',
            'modelo.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'nombre.required' => 'El campo :attribute es obligatorio',
            'nombre.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'so.required' => 'El campo :attribute es obligatorio',
            'so.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'procesador.required' => 'El campo :attribute es obligatorio',
            'procesador.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'ram.required' => 'El campo :attribute es obligatorio',
            'ram.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'dominio.required' => 'El campo :attribute es obligatorio',
            'dominio.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'ipv4.required' => 'El campo :attribute es obligatorio',
            'ipv4.max' => 'El campo :attribute debe tener maximo 150 caracteres',

            'puerto.required' => 'El campo :attribute es obligatorio',
            'puerto.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'usuario.required' => 'El campo :attribute es obligatorio',
            'usuario.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'contraseña.required' => 'El campo :attribute es obligatorio',
            'contraseña.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'equipo.required' => 'El campo :attribute es obligatorio',
            'equipo.max' => 'El campo :attribute debe tener maximo 50 caracteres',
        ];
    }
}
