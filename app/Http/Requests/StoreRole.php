<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRole extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'role_name' => 'required|string|max:50',
        ];
    }

    public function messages() //Optional for custom response validate message
    {
        return [
            'role_name.required' => 'Role name is required.',
            'role_name.string'  => 'Role name must be a string',
            'role_name.max' => 'Role name max length is 50.',
        ];
    }
}
