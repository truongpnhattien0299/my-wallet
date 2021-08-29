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

    public function attributes()
    {
        return [
            'password' => 'Password',
            'username' => 'Username',
            'name' => 'Name',
        ];
    }
    public function messages()
    {
        return [
            'password.required'  => ':attribute is required',
            'password.confirmed' => ':attribute confirmed is wrong',
            'username.required'  => ':attribute is required',
            'username.min'       => ':attribute minimun 4 characters',
            'name.required'      => ':attribute is required',
            'name.min'           => ':attribute minimun 5 characters',

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|confirmed|min:6',
            'username' => 'required|min:4',
            'name'     => 'required|min:5',
        ];
    }
}
