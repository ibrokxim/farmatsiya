<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'dignity'=>['required'],
            'name'=>['required'],
            'surname'=>['required'],
            'second_name',
            'orcid_id',
            'institute' => ['required'],
            'kafedra' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'postcode' => ['required'],
            'country' => ['required'],
            'number' => ['required'],
            'second_number',
            'email' => ['required|email'],
            'password' => ['required|min:8|confirmed'],
   
        ];
    }
}
