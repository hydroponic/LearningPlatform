<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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

            'question_id' => 'nullable|int|min:0',
            'answer' => 'nullable|string|min:0',
            'score' => 'nullable|string|min:0',
        ];
    }
}
