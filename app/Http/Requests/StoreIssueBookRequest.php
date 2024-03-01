<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIssueBookRequest extends FormRequest
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
        return [
            'book_id' => 'required',
            'user_id' => 'required',
            'issued_on' => ['required', 'date', 'before:tomorrow'],
        ];
    }

    public function messages()
    {
        return [
            'issued_on.before' => 'The issued_on field can\'t be of future'
        ];
    }
}
