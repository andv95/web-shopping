<?php

namespace App\Http\Requests\Admin;

use App\Traits\HasAjaxRequest;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends BaseRequest
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
            'slug' => $this->slugValidate()
        ];
    }
}
