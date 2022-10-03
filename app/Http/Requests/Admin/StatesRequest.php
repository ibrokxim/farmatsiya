<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StatesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "stat_lang",
            "short_name",
            "stat_type" ,
            "files",
            'status',
            'annotation',
            'institute_ru', 'institute_uz', 'institute_en',
            'key_words',
        ];
    }
}
