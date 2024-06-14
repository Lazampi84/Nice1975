<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required',
            'message' => 'required'
        ];
    }
    // Override del un metodo messages x metterli in italiano
    public function messages()
    {
        return[
            'username.required' => 'Il campo nome è obbligatorio',
            'email.required' => 'Il campo email è obbligatorio',
            'message.required' => 'Inserire un messaggio'
        ];
    }
}
