<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required',
            'txtphone' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            // 'txtnim' => 'A title is required',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtfullname' => 'Fullname',
            'txtgender' => 'gender',
            'txtaddress' => 'Address',
            'txtemail' => 'Email',
            'txtphone' => 'Phone',
        ];
    }
}
