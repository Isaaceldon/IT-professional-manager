<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'last_name'=>'bail|required',
            'first_name'=>'bail|required',
            'phone'=>'bail|required',
            'profession'=>'bail|required',
            'email'=>'bail|required',
            'type_compte'=>'bail|required',
            'avatar'=>'bail',
            'admin'=>'bail|required',
            'password'=>'bail|required',
        ];
    }
}
