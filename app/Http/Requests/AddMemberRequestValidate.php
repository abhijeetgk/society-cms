<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMemberRequestValidate extends FormRequest
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
            
            'name' => 'required|min:10',
            'co_owner_name' => 'required|min:10',
            'flat_no' => 'required',
            'floor_no' => 'required'
        ];
    }
    public function messages(){
        return [
            
            'name.required' => 'You must enter members name',
            'name.min' => 'Members name should be of minimum 10 characters',
            'co_owner_name.required' => 'You must enter co-owners name',
            'co_owner_name.min' => 'Co owners name should be of minimum 10 characters',
            'flat_no.required' => 'You must enter flat number',
            'floor_no.required' => 'You must enter floor number'
        ];
    }
}
