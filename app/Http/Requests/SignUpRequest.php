<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // rule for registration form
            'name' => ['required','min:3','max:10'],
            'userid' => ['required'],
            'contact' => ['required','min:10'],
            'password' => ['required','min:6'],
            'confirmPassword' => ['required_with:password','same:password','min:6'],
            'whatsapp_no' => ['required','min:10'],
        ];
    }
}
