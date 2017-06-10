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

        if ($this->method() == 'put') {
            return [
                'name'        => 'required|min:5',
                'category_id' => 'required',
                'image'       => 'required',
                'content'     => 'required' 
            ];
        }else{
            return [
                'name'        => 'required|min:5',
                'category_id' => 'required',
                'content'     => 'required'                     
            ]; 
        }     
    }
    public function messages()
    {
        return [
            'name.required'        => 'El campo Nombre es requerido!',
            'name.min'             => 'El campo Nombre no puede tener menos de 5 (cinco) carácteres!',
            'category_id.required' => 'El campo Categoria es requerido!',
            'image.required'       => 'El campo Imagen es requerido!',
            'content.required'     => 'El campo Contenido es requerido!'
        ];
    }
}
