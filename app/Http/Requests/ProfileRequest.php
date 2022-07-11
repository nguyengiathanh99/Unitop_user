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
            'name' => 'required ',
            'address' => 'required',
            'dob' => 'required|before:today',
            'phone' => 'required|max:11',
            'myFile' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'address.required' => 'Address is required',
            'dob.required' => 'Date of birth is required',
            'dob.after' => 'Date of birth must be date before today',
            'phone.required' => 'Phone is required',
            'phone.max' => 'Phone is too long',
        ];
    }
}
