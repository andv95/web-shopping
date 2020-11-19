<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends BaseRequest
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
            'slug' => 'required|max:200|unique:categories,slug,'. $this->id,
            'name_en' => 'required|max:255',
            'slug_en' => 'required|max:200|unique:categories,slug,'. $this->id,
            'image.src' => 'required',
            'image.title' => 'required',
            'image.alt' => 'required'
        ];
    }
}
