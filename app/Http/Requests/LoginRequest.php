<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login_username' => 'required',
            'login_password' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'login_username.required' => 'Login username is required',
            'login_password' => 'Login password is required',
            'login_password.min' => 'Login password is too short',
        ];
    }
}
