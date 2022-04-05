<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'category' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'brgy' => 'required',
            'municipality' => 'required',
            'province' => 'required',
            'position' => 'required_if:category,staff',
            'department' => 'required_if:category,student',
            'grade_level' => 'required_if:category,student',
            'section' => 'required_if:category,student',
            'contact_number' => 'required',
            'vaccine_card_image' => request()->isMethod('put') ? 'nullable|image'  : 'nullable|image',
            'person_image' => request()->isMethod('put') ? 'nullable|image'  : 'nullable|image',
            'id_number' => 'required_unless:category,visitor',
        ];
    }
}
