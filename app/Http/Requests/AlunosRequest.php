<?php

namespace cadastro\Http\Requests;

use cadastro\Http\Requests\Request;

class AlunosRequest extends Request
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
            'nome' => 'required|max:30',
            'apelido' => 'required|max:50',
            'data' => 'required|numeric',
            'bi' => 'required|max:13',
            'bairro' => 'required|max:40',
            'avenida' => 'required|max:40',
            'nacionalidade'=> 'required|max:30',
            'telefone' => 'required|numeric',
            'encarregado' => 'required|max:40',
            'curso' => 'required|max:40',
            'plano' => 'required|max:40',
            'email' => 'required|max:50'
        ];
    }
    public function messages(){
        return[
            'nome.required' => 'O campo do :attribute esta vazio.',
            'apelido.required' => 'O campo do :attribute esta vazio.',
            'data.required' => 'O campo da :attribute Nascimento esta vazio',
            'bi.required' => 'O campo do numero :attribute esta vazio',
            'bairro.required' => 'O campo do bairro :attribute esta vazio',
            'avenida.required' => 'O campo da avenida :attribute esta vazio',
            'nacionalidade.required' => 'O campo da nacionalidade :attribute esta vazio',
            'telefone.required' =>'O campo do telefone:attribute esta vazio',
            'encarregado.required' =>'O campo do encarregado :attribute esta vazio',
            'curso.required' => 'O campo do curso :attribute esta vazio',
            'plano.required' => 'O campo do plano :attribute esta vazio',
            'email.required' => 'O campo do email :attribute esta vazio',
            ];
    }
}
