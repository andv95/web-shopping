<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200',
            'slug' => $this->slugValidate(),
            'name_en' => 'required|max:200',
            'slug_en' => $this->slugEnValidate(),
        ];
    }
}
