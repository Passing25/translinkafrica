<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "nom_societe" => 'required',
            "secteur_activite" => 'required',
            "nom_admin" => 'required',
            "prenom_admin" => 'required',
            "email_admin" => 'required|email',
            "confirmation_email_admin" => 'required|email|same:email_admin',
            "password_admin" => 'required',
            "confirmation_password_admin" => 'required|same:password_admin',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est obligatoire',
            'email' => 'Votre adresse email est incorrect',
            'confirmation_email_admin.same' => 'Vos adresses email ne sont pas identiques',
            'password_admin.same' => 'Vos mots de passe ne sont pas identiques',

        ];
    }
}
