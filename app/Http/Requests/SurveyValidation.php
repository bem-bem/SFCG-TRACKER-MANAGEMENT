<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyValidation extends FormRequest
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
            'purpose'=>'bail|required|max:30',
            'created_at'=>'bail|required',
            'temperature'=>'bail|required|max:6',
            'fever_chill'=>'nullable',
            'headache'=>'nullable',
            'cough'=>'nullable',
            'cold'=>'nullable',
            'fatigue'=>'nullable',
            'weakness'=>'nullable',
            'lost_of_smell_taste'=>'nullable',
            'diarhea'=>'nullable',
            'defficult_breathing'=>'nullable',
            'rashess'=>'nullable',
            'sorethroat'=>'nullable',
            'none'=>'nullable',
            'other_symptoms'=>'nullable|max:50',
        ];
    }
}
