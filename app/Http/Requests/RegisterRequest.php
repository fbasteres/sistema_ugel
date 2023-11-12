<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'dni' => 'required|unique:users,dni',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Agrega el nombre del estudiante.',
            'dni.required' => 'Agregar DNI.',
            'dni.unique' => 'Número de DNI, ya se encuentra registrado.',
            'email.unique' => 'Correo, ya se encuentra registrado.',
            'password_confirmation.same' => 'Contraseña no coinciden.',
        ];

    }
}
