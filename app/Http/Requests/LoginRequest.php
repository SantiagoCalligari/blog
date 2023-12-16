<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required|string',
            'password' => 'required|string',
            //
        ];
    }

    public function getCredentials() {
        // The form field for providing username or password
        // have name of "username", however, in order to support
        // logging users in with both (username and email)
        // we have to check if user has entered one or another
        $name = $this->get('name');
        $password = $this->get('password');

        return ['name' => $name, 'password' => $password];
    }
}
