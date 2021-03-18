<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberReqeust extends FormRequest
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
            'firstname' => ['required' , 'string'],
            'surname' => ['required' , 'string'],
            'date_of_birth' => ['required' , 'date'],
            'password' => ['required'],
            'school_name' => ['required' , 'string'],
            'current_year' => ['required'],
            'school_id' => ['required'],
            'national_id' => ['required'],
            'address' => ['required'],
            'ecocash_number' => ['required'],
            'amount' => ['required']
        ];
    }
}
