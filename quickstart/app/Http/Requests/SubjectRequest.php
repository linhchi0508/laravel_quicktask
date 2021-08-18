<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'subject_code' => 'required|unique:subjects',
            'major' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => trans('request.title'),
            'subject_code.required' => trans('request.code_required'),
            'subject_code.unique' => trans('request.code_unique'),
            'major.unique' => trans('request.major_required'),
        ];
    }
}
