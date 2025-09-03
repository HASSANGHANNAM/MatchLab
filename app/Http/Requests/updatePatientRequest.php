<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePatientRequest extends FormRequest
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
    $userId = auth()->id();
    $patientId = auth()->user()->patient->id ?? null;

    return [
        'first_name' => 'nullable|string|max:255',
        'last_name'  => 'nullable|string|max:255',
        'email'      => "nullable|email|unique:users,email,{$userId}",
        'phone'      => "nullable|unique:patients,phone,{$patientId}",
        'gender'     => 'nullable|in:male,female',
        'dob'        => 'nullable|date',
        'Health_Problems' => 'nullable|string',
    ];
    }


}
