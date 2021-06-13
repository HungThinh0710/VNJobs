<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class AddMember extends FormRequest
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
            'org_id' => 'required|integer|min:1', //exist check with middleware
            'user_id' => 'required|integer|min:1',
            'role_id' => 'required|integer|min:2|max:3',
        ];
    }

    public function messages() {
        return [
            'org_id.required' => 'org_id is required',
            'org_id.integer' => 'org_id must be a integer',
            'user_id.required' => 'user_id must be a integer',
            'user_id.integer' => 'user_id must be a integer',
            'role_id.required' => 'role_id must be a integer',
            'role_id.integer' => 'role_id must be a integer',
        ];
    }
}
