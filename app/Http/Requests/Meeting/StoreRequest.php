<?php

namespace App\Http\Requests\Meeting;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => '',
            'start_period' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Наименование обязательно для заполнения',
            'name.string' => 'Поле Наименование должно быть строковым значением',
            'start_period.required' => 'Поле Квартал обязательно для заполнения',
        ];
    }
}
