<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecruitmentNews extends FormRequest
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
            'org_id' => 'required|integer', 
            'author_id' => 'required|integer', 
            'major_id' => 'required|integer', 
            'title' => 'required|string|max:255', 
            'content' => 'required|string', 
            'address' => 'required|string|max:255', 
            'city' => 'required|string|max:255', 
            'work_type' => 'required|string|max:255',
            'start_time' => 'required|date', 
            'end_time' => 'required|date', 
            'interview_start_time' => 'required|date', 
            'interview_end_time' => 'required|date'
        ];
    }

    public function messages() {
        return [
            'org_id.required' => 'Organization id is required', 
            'org_id.integer' => 'Organization id must be a integer', 
            'author_id.required' => 'Author id is required', 
            'author_id.integer' => 'Author id must be a integer', 
            'major_id.required' => 'Major id is required', 
            'major_id.integer' => 'Major id must be a integer', 
            'title.required' => 'Title is required', 
            'title.string' => 'Title must be a string', 
            'title.max' => 'Title max length is 255', 
            'content.required' => 'Content is required', 
            'content.string' => 'Content must be a string', 
            'address.required' => 'Address is required', 
            'address.string' => 'Address must be a string', 
            'address.max' => 'Address max length is 255', 
            'city.required' => 'City is required', 
            'city.string' => 'City must be a string',
            'city.max' => 'City max length is 255', 
            'work_type.required' => 'Work type is required', 
            'work_type.string' => 'Work type must be a string',
            'work_type.max' => 'Work type max length is 255',
            'start_time.required' => 'Start tiime is required', 
            'start_time.date' => 'Start tiime must be a date', 
            'end_time.required' => 'End time is required', 
            'end_time.date' => 'End time must be a date', 
            'interview_start_time.required' => 'Interview start time is required', 
            'interview_start_time.date' => 'Interview start time must be a date', 
            'interview_end_time.required' => 'Interview end time is required',
            'interview_end_time.date' => 'Interview end time must be a date'
        ];
    }
}
