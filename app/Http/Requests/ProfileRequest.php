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
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'dob.required' => 'Ngày sinh không được để trống',
            'dob.after' => 'Ngày sinh phải trước ngày hôm nay',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.max' => 'Số điên thoại quá dài',
        ];
    }
}
