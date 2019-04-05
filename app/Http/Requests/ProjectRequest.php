<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:30',
            'title' => 'nullable|string|max:30',
            'description' => 'required|string|max:100',

            'status' => 'required|integer|min:0|max:2',
            'progress' => 'required|integer|min:-1|max:100',
            'large' => 'required|boolean',
            'published' => 'required|boolean',
            'color' => 'required|string',
            'technologies' => 'nullable|string',
            'version' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'creation_date' => 'required|date',
            'about' => 'nullable|string',

            'website_url' => 'nullable|url',
            'screenshot_url' => 'nullable',
            'youtube_video_id' => 'nullable',
            'downloads_url' => 'nullable|url',
            'report_url' => 'nullable|url',
            'github_repo_name' => 'nullable|string',
            'github_repo_username' => 'nullable|string'
        ];
        return $rules;
    }
}
