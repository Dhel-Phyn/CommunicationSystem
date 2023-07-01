<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageFormRequest extends FormRequest
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
        $rules = [
            'senderId' => [
                'required',
                'string',
                'max:50',
            ],
            'username' => [
                'required',
                'string',
                'max:50',
            ],
            'phone'=> [
                'required',
                'integer',
                'max:50',
            ],
            'email'=> [
                'required',
                'string',
                'max:25',
            ],
            'text'=> [
                'required',
            ],
            'recipientId'=> [
                'required',
                'integer',
                'max:50',
            ],

        ];
        return $rules;
    }
}
