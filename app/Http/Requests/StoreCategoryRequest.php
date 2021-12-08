<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape([
        'name' => "string[]"
    ])]
    public function rules(): array
    {
        return [
            'name' => ['required', 'string']
        ];
    }

    #[ArrayShape([
        'required' => "string",
        'string' => "string"
    ])]
    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'string' => 'O campo :attribute deve ser do tipo string'
        ];
    }
}
