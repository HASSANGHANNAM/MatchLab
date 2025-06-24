<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Responses\Response;
use Illuminate\Validation\ValidationException;


class UserSinupRequest extends FormRequest
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

            // 'name' => 'required|string|min:4',
            'first_name' => 'required|string|min:4',
            'last_name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',

            'phone' => 'required|string|unique:patients,phone',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            // 'location' => 'required|string',
            'Health_Problems' => 'string',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, Response::Validation([], $validator->errors()));
    }
}
