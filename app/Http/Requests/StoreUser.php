<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'date',
            'phone' => 'string|max:12',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|string|max:255',
            'address' => 'string|max:255',
        ];
    }

    public function messages() //Optional for custom response validate message
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.string'  => 'First name must be a string',
            'first_name.max' => 'First name max lenght is 255.',
            'dob.date'  => 'Day of birth must be a date',
            'phone.string'  => 'Phone number must be a string',
            'phone.max' => 'Phone number max lenght is 12.',
            'email.required' => 'Email is required.',
            'email.string'  => 'Email must be a email',
            'email.max' => 'Email max lenght is 50.',
            'password.required' => 'Password is required.',
            'password.string'  => 'Password must be a string',
            'password.max' => 'Password max lenght is 255.',
            'address.string'  => 'Address must be a string',
            'address.max' => 'Address max lenght is 255.',
        ];
    }
}
