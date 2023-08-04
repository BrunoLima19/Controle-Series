<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            // se não tiver nome ou menos de 3 caracteres, volta para a mesma página
            'nome' => ['required', 'min:3']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => ' O campo nome é obrigatório',
            'nome.min' => ' O campo nome precisa ter pelo menos :min catacteres'
        ];
    }
}
