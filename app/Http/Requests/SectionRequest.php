<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Your authorization logic here, e.g., checking if the user has the necessary permissions.
        return true; // Update this based on your requirements.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string',
            'required',
            'max:255',
            Rule::unique('sections','name'),
        ],
            'grade_id' => 'required',
            'user_id' => 'required',
        ];
    }
}
