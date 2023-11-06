<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'txtnim' => 'required|unique:students,idstudent|min:7|max:7',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required|unique:students,emailaddress',
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
            'txtnim' => 'NIM',
            'txtfullname' => 'Fullname',
            'txtgender' => 'gender',
            'txtaddress' => 'Address',
            'txtemail' => 'Email',
            'txtphone' => 'Phone',
        ];
    }
}
