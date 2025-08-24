<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateAppointmentRequest extends FormRequest
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
            'type' => 'string|max:255',
            'patient_name' => 'string|max:255',
            'patient_phone' => 'string|max:20',
            'patient_id_number' => 'string|max:50',
            'lab_id' => 'integer|exists:labs,id',
            'location_id' => 'nullable|integer|exists:locations,id',
            'date_time' => 'date_format:Y-m-d H:i:s',
            'analyses' => 'array|min:1',
            'analyses.*' => 'integer|exists:lab_analyses,id'
        ];
    }
}
