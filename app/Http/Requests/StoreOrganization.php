<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganization extends FormRequest
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
            'owner_id' => 'required|integer',
            'org_name' => 'required|string|max:255',
            'phones' => 'required|string|max:12',
            'description' => 'required|string',
            'tax_id' => 'required|integer',
            'address' => 'string|max:255',
            'logo_path' => 'string|max:255',
            'cover_path' => 'string|max:255'
        ];
    }

    public function messages() {
        return [
            'owner_id.required' => 'Owner id is required',
            'owner_id.integer' => 'Owner id must be a integer',
            'org_name.required' => 'Organization name is required',
            'org_name.string' => 'Organization name must be a string',
            'org_name.max' => 'Organization name max length is 255',
            'phones.required' => 'Phone number is required',
            'phones.string' => 'Phone number must be a string',
            'phones.max' => 'Phone number max length is 12',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
            'tax_id.required' => 'Tax id is required',
            'tax_id.integer' => 'Tax id must be a integer',
            'address.string' => 'Address must be a string',
            'address.max' => 'Address max length is 255',
            'logo_path.string' => 'Logo path must be a string',
            'logo_path.max' => 'Logo path max length is 255',
            'cover_path.string' => 'Cover path must be a string',
            'cover_path.max' => 'Cover path max length is 255'
        ];
    }
}
