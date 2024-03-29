<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateTourRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:10000',
            'photo' => 'required|image'
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Nome é obrigatório',
            'name.min' => 'É obrigatorio no mínimo 3',
            'photo.required' => 'A foto é obrigatório',


        ];
    }
}
