<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'subject' => 'nullable|string|min:0',
            'message' => 'nullable|string|min:0',
            'email' => 'nullable|string|min:0',
            'name' => 'nullable|string|min:0',
        ];
    }
}
