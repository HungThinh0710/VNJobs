<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMajor extends FormRequest
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
            'major_name' => 'required|string',
            'image_path' => 'string'
        ];
    }

    public function messages() {
        return [
            'major_name.required' => 'Major name is required',
            'major_name.string' => 'Major must be a string',
            'image_path.string' => 'Image path must be a string',
        ];
    }
}
