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
            'last_name' => 'required|string|max:30',
            'first_name' => 'required|string|max:40',
            'middle_name' => 'required|string|max:30',
            'brgy' => 'required',
            'municipality' => 'required',
            'province' => 'required',
            'position' => 'required_if:category,staff',
            'department' => 'required_if:category,student',
            'grade_level' => 'required_if:category,student',
            'section' => 'required_if:category,student',
            'contact_number' => 'required|string|max:11',
            'vaccine_card_image' => request()->isMethod('put') ? 'nullable|image'  : 'required|image',
            'person_image' => request()->isMethod('put') ? 'nullable|image'  : 'required|image',
            'id_number' => 'required_unless:category,visitor|string|max:9',
        ];
    }
}
