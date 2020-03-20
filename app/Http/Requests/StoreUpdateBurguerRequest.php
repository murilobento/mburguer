<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBurguerRequest extends FormRequest
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
        $id = $this->segment(2);
        return [
            'nome' => "required|min:3|max:30|unique:burguers,nome,{$id},id",
            'desc' => 'required|min:3|max:10000',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|mimes:JPG,jpeg,PNG',
            'status' => 'required|numeric|min:0|max:1'
        ];
    }
    public function messages()
    {
        return [
            //nome
            'nome.required' => 'O nome é obrigatório!',
            'nome.min' => 'Nome deve conter no mínimo 3 caracteres!',
            'nome.max' => 'Nome deve conter no máximo 30 caracteres!',
            'nome.unique' => 'Este nome já esta em uso.',
            //desc
            'desc.required' => 'A descrição é obrigatório!',
            'desc.min' => 'Descrição deve conter no mínimo 3 caracteres!',
            'desc.max' => 'Descrição deve conter no máximo 10.000 caracteres!',
            //preço
            'preco.required' => 'O preço é obrigatório!',
            'preco.numeric' => 'O campo preço aceita somente números!',
            //imagem
            'imagem.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, ou png.',
            'imagem.image' => 'O arquivo deve ser uma imagem',
            //status
            'status.min' => 'O status deve ser Ativo¹ ou Inativo⁰.',
            'status.max' => 'O status deve ser Ativo¹ ou Inativo⁰.',
        ];
    }
}
