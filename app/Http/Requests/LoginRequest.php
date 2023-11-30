<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Usuario es requerido',
            'password.required' => 'Contraseña es requerida'
        ];
    }
    public function getCredentials()
    {
        $username = $this ->get('username');

        if ($username){
            return [
                'username'=> $username,
                'password' => $this->get('password')
            ];
        }
        return $this->only('email', 'password');
    }
}
