<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'register_username' => 'required',
            'email' => 'required',
            'register_password' => 'required|min:5',
            'password_confirmation' => 'required|same:register_password'
        ];
    }

    public function messages()
    {
        return [
            'register_username.required' => 'Register password is required',
            'email' => 'Email is required',
            'register_password' => 'Register password is required',
            'register_password.min' => 'Register password is too short',
            'password_confirmation' => 'Confirm-password is required',
            'password_confirmation.same' => 'Passwords do not match',
        ];
    }
}
