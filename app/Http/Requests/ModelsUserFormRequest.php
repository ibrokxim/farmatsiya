<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property mixed $password
 */

class ModelsUserFormRequest extends FormRequest
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
            "dignity" => ["required"],
            "name" => ["required"],
            "surname" => ["required"],
            "second_name",
            "orcid_id" => ["required", "digits_between:16,19"],
            "institute" => ["required"],
            "kafedra" => ["required"],
            "address" => ["required"],
            "city" => ["required"],
            "postcode" => ["required"],
            "country" => ["required"],
            "number" => ["required", "digits_between:11,15"],
            "second_number",
            "email" => ["required"],
            "password" => [
                Rule::when(
                    request()->isMethod('post'),
                    ["required", "confirmed"],
                    ["sometimes", "confirmed"]
                )
            ],
        ];
    }
    public function messages()
{
    return [
        'dignity.required' => 'Поле Титул является обязательным!',
        'name.required' => 'Поле Имя является обязательным!',
        'surname.required' => 'Поле Фамилия является обязательным!',
        'orcid_id.required' => 'Поле ORCID_ID является обязательным!',
        'institute.required' => 'Поле Институт/организация является обязательным!',
        'kafedra.required' => 'Поле Кафедра является обязательным!',
        'address.required' => 'Поле Адрес является обязательным!',
        'city.required' => 'Поле Город является обязательным!',
        'postcode.required' => 'Поле Почтовый индекс является обязательным!',
        'country.required' => 'Поле Страна является обязательным!',
        'number.required' => 'Поле Контактный номер является обязательным!',
        'email.required' => 'Поле Еmail является обязательным!',
        'password.required' => 'Поле имя является обязательным!',
    ];
}
    protected function prepareForValidation()
    {
        if(is_null($this->password)) {
            $this->request->remove('password');
        }
    }
}