<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class CustomerRequest extends FormRequest
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
            'name' => 'required|min:5|max:25',
            'mail' => 'required|email',
            'phone_number' => 'required|min:7|max:12',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('customer.errors.name.required'),
            'name.max' => trans('customer.errors.name.max'),
            'name.min' => trans('customer.errors.name.min'),
            'mail.required' => trans('customer.errors.mail.required'),
            'phone_number.required' => trans('customer.errors.phone_number.required'),
            'phone_number.min' => trans('customer.errors.phone_number.min'),
            'phone_number.max' => trans('customer.errors.phone_number.max'),
            'address.required' => trans('customer.errors.address.required'),
        ];
    }
    // public function failedValidation(Validator $validator){
    //     dd($validator);
    // }
}
