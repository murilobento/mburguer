<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
            'name' => "required|min:3|max:30|unique:products,name,{$id},id",
            'desc' => 'required|min:3|max:10000',
            'type' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'status' => 'required|numeric|min:0|max:1'
        ];
    }
    public function messages()
    {
        return [
            //nome
            'name.required' => 'O nome é obrigatório!',
            'name.min' => 'Nome deve conter no mínimo 3 caracteres!',
            'name.max' => 'Nome deve conter no máximo 30 caracteres!',
            'name.unique' => 'Este nome já esta em uso.',
            //desc
            'desc.required' => 'A descrição é obrigatório!',
            'desc.min' => 'Descrição deve conter no mínimo 3 caracteres!',
            'desc.max' => 'Descrição deve conter no máximo 10.000 caracteres!',
            //tipo
            'type.required' => 'O tipo é obrigatório!',
            //preço
            'price.required' => 'O preço é obrigatório!',
            'price.numeric' => 'O campo preço aceita somente números!',
            //imagem
            'image.mimes' => 'A imagem deve ser um arquivo do tipo: jpg, jpeg, ou png.',
            'image.image' => 'O arquivo deve ser uma imagem',
            //status
            'status.min' => 'O status deve ser Ativo¹ ou Inativo⁰.',
            'status.max' => 'O status deve ser Ativo¹ ou Inativo⁰.',
        ];
    }
}
