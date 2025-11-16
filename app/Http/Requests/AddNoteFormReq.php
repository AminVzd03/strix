<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class AddNoteFormReq extends FormRequest
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

                'title' => 'required|string|min:3|max:255',
                'body' => 'required|string|min:3',
                'recipientEmail' => 'required|email|max:255',

        ];
    }
    public function validationResolved($dateTime) {
        parent::validationResolved();
        $this->validateTimeIsFuture($dateTime);
    }
    public function validateTimeIsFuture($dateTime)  {
            if($dateTime->lessThar(now())) {}
            throw ValidationException::withMessages([
                'date' => 'Since you want to send later the date/time must be greater than now!',
            ]);
    }
}
