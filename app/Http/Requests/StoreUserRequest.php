<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'required', 'string', 'max:10',
            'gender' => 'required', 'string',
            'address' => 'required', 'string', 'max:255',
            'dob' => 'required', 'date',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8|max:25'
        ];
    }
}
