<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('client-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'first_name' => 'required',
            'family_name' => 'required',
            'full_name' => 'required',
            'pvt_address' => 'required',
            'passport' => 'required',
            'nic' => 'required',
            'pp_expire_date' => 'required',
            //'vat' => 'max:12',
            //'email' => 'required',
            //'address' => '',
            //'zipcode' => 'max:6',
            //'city' => '',
            'telepone' => 'max:10',
            'mobile' => 'max:10',
            'fax' => 'max:10',
            //'industry' => '',
            //'company_type' => '',
            //'user_id' => 'required'
        ];
    }
}
