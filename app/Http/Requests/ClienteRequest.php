<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

    public function messages()
    {
      return [
        'nome.required'=>'Prencha um nome',
        'nome.min'=>'Minimo de 5 caracteres',
        'nome.max'=>'Máximo de 100 caracteres',
        'email.required'=>'Prencha um E-mail',
        'email.unique'=>'Esse e-mail já existe em nosso sistema',
        'email.max'=>'Máximo de 100 caracteres',
        'email.email'=>'Prencha com um E-mail válido',
        'imagem.required'=>'Enviar uma imagem',
        'imagem.mimes'=>'Imagens somente JPEG',
        'num_par'=>'Somente numeros pares'
      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nome'=>'required|min:5|max:100',
          'email'=>'sometimes|required|max:100|email|unique:users',
          'imagem'=>'required|mimes:jpeg',
          'numero'=>'num_par'
        ];
    }
}
