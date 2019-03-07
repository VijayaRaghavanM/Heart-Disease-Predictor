<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'age' => 'required',
            'sex' => 'required',
            'bp' => 'required',
            'cp' => 'required',
            'chol' => 'required',
            'fbs' => 'required',
            'ecg' => 'required',
            'oldpeak' => 'required',
            'thalach' => 'required',
            'exang' => 'required',
            'ca' => 'required',
            'slop' => 'required',
            'thal' => 'required',

        ];
    }
}
