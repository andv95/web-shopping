<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        dd(1);
        return [
            'user_name' => array(
                'required',
                'regex:/^[a-zA-Z]{3,20}$',
                'string|max:255'
            ),
            'address' => array(
                'required',
                'string|max:255'
            ),
            'user_phone' => array(
                'required',
                'regex:/^(84|0[3|5|7|8|9])+([0-9]{8})\b',
                'string|max:255'
            ),
            'email' => array(
                'required',
                'regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$',
                'string|max:255'
            ),
        ];
    }
}
