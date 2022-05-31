<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'search' => 'bail|required|alpha',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
