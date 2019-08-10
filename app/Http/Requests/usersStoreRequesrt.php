<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersStoreRequesrt extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ];
    }

    public function messages(){
        return [
           'name' => 'this is required',
           'email' => 'this is required',
           'password' => 'this is should more than 8'
        ];
    }
}
