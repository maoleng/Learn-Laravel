<?php

namespace App\Http\Requests\Course;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateRequest extends FormRequest
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
            'name' => [
                'bail',
                'string',
                'required',
                Rule::unique(Course::class)->ignore($this->course->id),
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attribute Bắt buộc phải điền"
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Tên đầu tiên",
        ];
    }

}
