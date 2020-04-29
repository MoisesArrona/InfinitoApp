<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovedadRequest extends FormRequest
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
            'titulo' => ['required', 'max:50'],
            'cuerpo' => ['required', 'max:150'],
            'foto' => ['file', 'mimes:jpeg,bmp,png'],
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'EL campo :attribute es obligatorio',
            'titulo.max' => 'El campo :attribute debe tener como maximo 50 caracteres',

            'cuerpo.required' => 'EL campo :attribute es obligatorio',
            'cuerpo.max' => 'El campo :attribute debe tener como maximo 150 caracteres',

            'foto.' => 'El campo :attribute debe de ser una imagen',
        ];
    }
}
