<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FindUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Set true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|integer'
        ];
    }

    public function messages() //Optional for custom response validate message
    {
        return [
            'id.required' => 'id is required.',
            'id.integer'  => 'id must be a integer',
        ];
    }
}
