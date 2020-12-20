<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSingleBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('admin') == true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => ['required', 'string', 'min:6'],
            'book_thumb' => ['image',],
            'book_image' => ['image',],
            'book_title' => ['required', 'string', 'min:4',],
            'book_title_en' => ['present', 'nullable', 'string', 'min:4',],
            'book_writers' => ['required', 'array', 'min:1',],
            'book_translators' => ['array'],
            'book_editors' => ['array'],
            'book_publisher' => ['required', 'array', 'size:1'],
            'book_categories' => ['required', 'array', 'min:1'],
            'book_isbn' => ['present', 'string', 'nullable', 'min:4'],
            'printed_price' => ['required', 'integer', 'min:1'],
            'buying_price' => ['required', 'integer', 'min:1'],
            'is_available' => ['required', 'string',  'regex:/^(yes|no)$/i'],
            'pre_order' => ['required', 'string',  'regex:/^(yes|no)$/i'],
            'book_quantity' => ['required', 'integer',  'min:0'],
            'book_pages' => ['required', 'integer',  'min:5'],
            'book_edition' => ['required', 'string',  'min:1'],
            'language_en' => ['required', 'string',  'min:2'],
            'language_bn' => ['required', 'string',  'min:2'],
            'country_en' => ['required', 'string',  'min:2'],
            'country_bn' => ['required', 'string',  'min:2'],
        ];
    }
}
