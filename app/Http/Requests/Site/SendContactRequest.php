<?php

namespace App\Http\Requests\Site;

use App\Http\Requests\Admin\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class SendContactRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:200|email:rfc',
            'address' => 'required|max:500',
            'content' => 'required|max:1000',
            'file' => 'max:5000',
        ];
    }
}
