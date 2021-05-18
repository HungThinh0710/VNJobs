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
            'dob' => 'date|nullable',
            // 'phone' => ['nullable', 'numeric', 'digits_between:10,12', Rule::unique('users', 'phone')->ignore($this->user()->id)],
            'phone' => ['nullable', 'numeric', 'digits_between:10,12'],
            // 'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')->ignore($this->user()->id)],
            'email' => ['required', 'email', 'max:50'],
//            'email' => Rule::unique('users')->ignore($this->user()->id),
            'address' => '|nullable|string|max:255',
        ];
    }
}
