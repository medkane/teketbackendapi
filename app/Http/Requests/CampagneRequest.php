<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampagneRequest extends FormRequest
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
            'titre' => 'required',           
            'type' => 'required',
            'shortDescription' => 'required',
            'longDescription' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
        ];
    }
}
