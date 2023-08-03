<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'category_id' => 'required',
            'name' => 'required',
            'author' => 'required',
            'total' => 'required|integer|min:1',
            'released_date' => 'required|date|before:tomorrow',
            'price' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'available.min' => 'No. of copies must be greater than 0',
            'released_date.before' => 'The released_date field can\'t be of future'

        ];
    }
}
