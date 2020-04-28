<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'codigo' => ['required', Rule::unique('productos', 'codigo')->ignore($this->producto), 'max:50'],
            'modelo' => ['required', 'max:50'],
            'nombre' => ['required', 'max:50'],
            'existencia' => ['required', 'integer'],
            'precio' => ['required', 'between:0,9999.99', 'numeric'],
            'foto' => ['file', 'mimes:jpeg,bmp,png'],
            'id_tipo' => ['required', 'integer'],
            'id_proveedor' => ['required', 'integer'],
        ];
    }

    public function messages(){
        return[
            'codigo.required' => 'El campo :attribute es obligatorio',
            'codigo.unique' => 'Ya existe un codigo igual',
            'codigo.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'modelo.required' => 'El campo :attribute es obligatorio',
            'modelo.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'nombre.required' => 'El campo :attribute es obligatorio',
            'nombre.max' => 'El campo :attribute debe tener maximo 50 caracteres',

            'existencia.required' => 'El campo :attribute es obligatorio',
            'existencia.integer' => 'El campo :attribute debe ser numerico',

            'precio.required' => 'El campo :attribute es obligatorio',
            'precio.between' => 'El campo :attribute no debe de pasar del rango 10,000',
            'precio.numeric' => 'El campo :attribute debe ser numerico',

            'foto.mimes' => 'Añade una imagen jpeg o png',

            'id_tipo.required' => 'El campo :attribute es obligatorio',
            'existencia.integer' => 'El campo :attribute debe ser numerico',

            'id_proveedor.required' => 'El campo :attribute es obligatorio',
            'existencia.integer' => 'El campo :attribute debe ser numerico',
        ];
    }
}
