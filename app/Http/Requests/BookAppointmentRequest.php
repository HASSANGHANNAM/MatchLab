<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookAppointmentRequest extends FormRequest
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
            'type' => 'required|string|max:255',
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string|max:20',
            'patient_id_number' => 'required|string|max:50',
            'longitude' => '',
            'latitude' => '',
            'lab_id' => 'required|integer|exists:labs,id',
            'location_id' => 'nullable|integer|exists:locations,id',
            'date_time' => 'required|date_format:Y-m-d H:i:s',
            'analyses' => 'required|array|min:1',
            'analyses.*' => 'integer|exists:lab_analyses,id'
        ];
    }
}
