<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestBasicInformation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required|string',
            'dob' => 'required',
            'github' => 'required',
            'linkedin' => 'required',
            'website' => 'nullable',
            'photo' => 'required|image|max:2048',
            'resume' => 'required|mimes:pdf|max:2048'
        ];
    }
}
