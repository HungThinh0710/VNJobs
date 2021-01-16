<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserFormRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')->ignore($this->user()->id)],
//            'email' => Rule::unique('users')->ignore($this->user()->id),
            'address' => 'string|max:255',
        ];
    }
}
