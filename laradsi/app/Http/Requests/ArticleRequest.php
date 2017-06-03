<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name'        => 'required|min:5',
            'content'     => 'required|min:5'                     
        ];
    }
    public function messages()
    {
        return [
            'name.required'        => 'El campo Nombre es requerido!',
            'name.min'             => 'El campo Nombre no puede tener menos de 5 (cinco) carácteres!',
            'content.required'     => 'El campo Contenido es requerido!',
            'content.min'          => 'El campo Contenido no puede tener menos de 5 (cinco) carácteres!',

        ];
    }
}
