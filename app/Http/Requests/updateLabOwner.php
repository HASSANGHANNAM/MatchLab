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
        'first_name'    => 'required|string|min:4',
        'last_name'     => 'required|string|min:4',
        'email'         => 'required|email|unique:users,email,' . $userId,
        'password'      => 'nullable|string|min:8|confirmed', // يمكن تركه فارغ إذا لم يغير
        'lab_name'      => 'required|string',
        'contact_info'  => 'required|string',
        'city_id'       => 'required|exists:cities,id',
        'fcm_token'     => 'nullable|string',
        // 'latitude'      => 'required|numeric',
        // 'longitude'     => 'required|numeric',
        'address'       => 'required|string',
        'image'         => 'nullable|image|mimes:jpeg,png,jpg' // يمكن عدم رفع صورة جديدة
    ];
}
}
