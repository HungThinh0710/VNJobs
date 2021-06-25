<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobSeeker extends FormRequest
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
            'user_id' => 'required|integer',
            'is_elect' => 'boolean',
            'cv_path' => 'string|max:255',
            'cover_letter_path' => 'string|max:255',
            'exp_years' => 'required|integer'
        ];
    }

    public function messages() //Optional for custom response validate message
    {
        return [
            'user_id.required' => 'User id is required.',
            'user_id.integer'  => 'User id must be a integer.',
            'is_elect.boolean' => 'Is elect must be a boolean.',
            'cv_path.string'  => 'Curriculumn vitae path must be a string.',
            'cv_path.max'  => 'Curriculumn vitae path max length is 255',
            'cover_letter_path.string'  => 'Cover letter path must be a string.',
            'cover_letter_path.max'  => 'Cover letter path max length is 255',
            'exp_years.required' => 'Experience years is required.',
            'exp_years.integer'  => 'Experience years must be a integer.',
        ];
    }
}
