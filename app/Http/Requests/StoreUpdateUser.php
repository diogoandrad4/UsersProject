<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUser extends FormRequest
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
            'name' => 'required|min:4|max:255',
            'role' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório!',
            'name.min' => 'Tamanho minimo do nome é 4 caracteres!',
            'role.required' => 'Função é obrigatório!',
            'email.required' => 'E-mail é obrigatório!',
        ];
    }
}
