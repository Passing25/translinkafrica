<?php

namespace App\Http\Requests\Requests\expe;

use Illuminate\Foundation\Http\FormRequest;

class ExpeditionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "lieu_depart" => 'required',
            "lieu_livraison" => 'required',
            "type_marchandise" => 'required',
            "date_depart" => 'required|date',
            "date_livraison" => 'required|date',
            "prix_expedition" => 'required|integer',
            "numero_serie" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire',
            'date' => 'Date incorrect',
            'prix_expedition.integer' => 'Prix Incorrect',
            'integer' => 'Ce champ ne prend que des entiers'

        ];
    }

}
