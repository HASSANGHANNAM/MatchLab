<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateLabOwner extends FormRequest
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
        $userId = auth()->id(); // المستخدم الحالي
        $labOwnerId = auth()->user()->LabOwner->lab->id ?? null;
        return [
            'first_name'    => 'nullable|string|min:4',
            'last_name'     => 'nullable|string|min:4',
            'password'      => 'nullable|string|min:8',
            'lab_name'      => 'nullable|string',
            'contact_info'  => 'nullable|string',
            'city_id'       => 'nullable|exists:cities,id',
            'address'       => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg',
            'latitude'      => 'nullable|numeric',
            'longitude'     => 'nullable|numeric',
            'home_service'     => 'nullable|boolean'
        ];
    }
}
