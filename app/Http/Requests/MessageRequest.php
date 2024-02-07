<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'text' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please provide a name.',
            'name.max' => 'The name must not exceed 30 characters.',
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'The email address must not exceed 255 characters.',
            'text.required' => 'Please provide some message.',
            'text.max' => 'The message must not exceed 255 characters.'
        ];
    }
}
