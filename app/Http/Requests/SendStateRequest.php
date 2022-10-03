<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendStateRequest extends FormRequest
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
            'stat_type'=>"required",
            'short_name' => 'required',
            'stat_lang' => 'required',
            'category' => 'required',
            'institute_uz' => 'required',
            'institute_ru' => 'required',
            'institute_en' => 'required',
            'fio' => 'required',
            'dignity' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required|numeric',
            'country' => 'required',
            'number' => 'required',
            'email' => 'required',
            'annotation' => 'required|max:300',
            'key_words' => 'required',
            'files' => 'file' ?? 0,
         ];
    }

    public function messages(){
    return [
        'stat_type.required' => 'Поле Тип статьи является обязательным!',
      
        'stat_lang.required' => 'Поле Язык статьи является обязательным!',
        'category.required' => 'Поле Категория статьи является обязательным!',
        'institute_uz.required' => 'Поле Институт/организация является обязательным!',
        'institute_ru.required' => 'Поле Институт/организация является обязательным!',
        'institute_en.required' => 'Поле Институт/организация является обязательным!',
       
        'annotation' => 'Поле аннотация является обязательным!',
        'key_words' => 'Поле Ключевые слова является обязательным!',
    ];
}
}
