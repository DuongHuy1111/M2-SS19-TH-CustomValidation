<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'age' => 'required|numeric|min:18',
        ];
    }

    public function messages()
    {
        $message = [
            'name.required' => 'Tên đầy đủ của bạn',
            'name.min' => 'Tên của bạn ít nhất 3 kí tự',
            'nam.max' => 'Tên của bạn tối đa là 30 kí tự',
            'age.required' => 'Nhập tuổi của bạn',
            'age.numeric' => 'Tuổi là dữ liệu số',
            'age.min' => 'Tuổi của bạn từ 18 trở lên'
        ];

        return $message;
    }
}
