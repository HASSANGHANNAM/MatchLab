<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LabWorkingHourRequest extends FormRequest
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
        'schedules' => ['required', 'array', 'min:1'],
        'schedules.*.day_of_week' => ['required', 'in:Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday'],
        'schedules.*.start_time' => ['required', 'date_format:H:i'],
        'schedules.*.end_time' => ['required', 'date_format:H:i', 'after:schedules.*.start_time'],
        'schedules.*.patients_per_hour' => ['nullable', 'integer', 'min:1'],
    ];

    }
}
