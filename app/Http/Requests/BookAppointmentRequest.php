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
            'type' => 'required|in:IN_HOME,IN_LAB',
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string|max:20',
            'patient_id_number' => 'required|string|max:20',
            'patient_id' => 'required|exists:patients,id',
            'lab_id' => 'required|exists:labs,id',
            'location_id' => 'nullable|exists:locations,id',
            'date_time' => 'required|date',
        ];
    }
}
