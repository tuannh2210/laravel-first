<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetRequest extends FormRequest
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
            'password'=>'required'
            'cf_password'=>'required|same:password'

        ];
    }

    // public function messages(){
    //     return[
    //         'password.required' => 'Không được để trống',
    //         'cf_password.required'=>'Không được để trống',
    //         'cf_password.same'=>''
    //     ];        
    // }
}
