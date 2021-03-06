<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|unique:users',
            'avatar' => 'image|max:2048',
            'password' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'email' => 'e-mail',
            'password' => 'пароль'
        ];
    }
}
