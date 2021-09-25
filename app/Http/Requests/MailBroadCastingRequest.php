<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class MailBroadCastingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'subject' => ['required', 'string', 'max:255', 'min:2'],
            'message' => ['required', 'string'],
            'emails' => ['required', 'array', 'min:1'],
            'emails.*' => ['required', 'email'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson())
            throw new HttpResponseException(response()->json(['status' => false, 'error' => $validator->errors()->first()], Response::HTTP_UNPROCESSABLE_ENTITY));
        else
            parent::failedValidation($validator);
    }
}
