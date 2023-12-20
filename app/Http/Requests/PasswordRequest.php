<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'password_actual' => 'required',
            'newPassword' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'password_actual.required' => 'Contraseña actual es obligatoria.',
            'newPassword.required' => 'Nueva contraseña es obligatorio',
            
        ];

    }
}
