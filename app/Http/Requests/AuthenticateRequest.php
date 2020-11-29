<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthenticateRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required|min:6|max:255'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required.',
            'password.required'  => 'Password is required',
            'password.min'  => 'Password must at least 6 characters',
            'password.min'  => 'Password must shorter 255 characters'
        ];
    }
}
