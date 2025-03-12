<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|unique:posts|max:255|string',
            'email' => 'required|email',
            'cc_number' => 'required_if:payment,cc',
        ];
    }

//    /**
//     * Get the error messages used by the form request and overwrites it.
//     *
//     * @return array<string, ValidationRule|array|string>
//     */
//
//    public function messages(): array
//    {
//        return [
//            'title.required' => 'lmao',
//            'email.required' => 'xd'
//        ];
//    }

//    public function attributes(): array
//    {
//        return [
////            'title' => 'skibidi',
////            'email' => 'sigma male'
//              'title' => 'título',
//              'teste' => 'um maluco no pedaço'
//        ];
//    }
}
