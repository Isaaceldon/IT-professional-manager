<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'last_diplome'=>'bail|required',
            'enterprise'=>'bail|required',
            'curriculum_vitae'=>'bail|required',
            'biography'=>'bail|required',
            'birthday'=>'bail|required',
            'city'=>'bail|required',
            'adresse'=>'bail|required',
            'country'=>'bail|required',
            'facebook'=>'bail',
            'linkedin'=>'bail',
            'youtube'=>'bail',
            'github'=>'bail',
            'portfolio'=>'bail',
            'twitter'=>'bail'
        ];
    }
}
