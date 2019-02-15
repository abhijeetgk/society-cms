<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSocietyRequestValidate extends FormRequest
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
            'name'=> 'required',
            'address' => 'required|min:10'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'You must enter a society name',
            'address.required' => 'You must enter society address'
        ];
    }
}
