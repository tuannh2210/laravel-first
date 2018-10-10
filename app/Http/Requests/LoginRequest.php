<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            // 'name'=>'required|min:6',
            // 'password'=>'required|min:6'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Tên không được để trống',
            'password.required'=>'Password không được để trống',
        ];        
    }
}
