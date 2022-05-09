<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Client extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nom' => ['required', 'string', 'max:50'],
            'Prenom' => ['required', 'string', 'max:100'],
            'DateNaissance' => ['required', 'numeric', 'min:', 'max:' . date('Y-m-d')],
        ];
    }
}
