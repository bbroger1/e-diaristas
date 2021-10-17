<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDiaristasRequest extends FormRequest
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
            'nome_completo'     => 'required|string|max:100',
            'cpf'               => 'required|string',
            'email'             => 'required|string',
            'telefone'          => 'required|string',
            'cep'               => 'required|string',
            'logradouro'        => 'required|string',
            'numero'            => 'required|integer',
            'complemento'       => 'nullable|string',
            'bairro'            => 'required|string',
            'cidade'            => 'required|string',
            'estado'            => 'required|string',
            'codigo_ibge'       => 'required|string',
            'foto_usuario'      => 'nullable|mimes:png,jpg'
        ];
    }
}
