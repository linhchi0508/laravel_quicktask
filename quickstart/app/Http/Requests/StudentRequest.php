<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'email|required|unique:students',
            'fullname' => 'required',
            'student_number' => 'unique:students|required',
            'major' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => trans('request.fullname_required'),
            'email.required' => trans('request.email_required'),
            'student_number.required' => trans('request.number_required'),
            'student_number.unique' => trans('request.number_unique'),
            'email.email' => trans('request.email_email'),
            'email.unique' => trans('request.email_unique'),
            'major.required' => trans('request.major_required'),
        ];
    }
}
