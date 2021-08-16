<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
