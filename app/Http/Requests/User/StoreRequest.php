<?php

namespace App\Http\Requests\User;

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
            'email' => 'required|string|email|unique:users',
            'department' => 'required|string',
            'birthday' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле ФИО обязательно для заполнения',
            'name.string' => 'Поле ФИО должно быть строковым значением',
            'email.required' => 'Поле E-mail обязательно для заполнения',
            'email.string' => 'Поле E-mail должно быть строковым значением',
            'email.email' => 'Поле E-mail не валидно (введите в формате email@domain.ru)',
            'email.unique' => 'Пользователь с таким email уже существует',
            'department.required' => 'Поле Отдел обязательно для заполнения',
            'department.string' => 'Поле Отдел должно быть строковым значением',
            'birthday.required' => 'Поле День рождения обязательно для заполнения',
            'birthday.date' => 'Поле День рождения должно содержать дату',
        ];
    }
}
