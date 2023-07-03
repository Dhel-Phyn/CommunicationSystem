<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string|max:255',
            'senderId' => 'required',
            'text' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
            'recipientId' => 'required',
        ];
    }
}
