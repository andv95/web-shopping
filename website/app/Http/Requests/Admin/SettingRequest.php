<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:500',
            'key' => 'required|max:500',
            'type' => 'required|max:100',
            'group' => 'required|max:100',
        ];
    }
}
