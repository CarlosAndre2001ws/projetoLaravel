<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

//    /**
//
//     * The URI that users should be redirected to if validation fails.
//
//     *
//
//     * @var string
//
//     */
//    protected $redirect = '/login';

    public function authorize(): bool
    {
        return $this->user()->can('storePost');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|unique:posts|max:255|string',
            'email' => 'required|email',
        ];
    }
}
