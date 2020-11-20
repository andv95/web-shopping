<?php

namespace App\Http\Requests\Admin;

use App\Traits\HasAjaxRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    use HasAjaxRequest;
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            $this->ajaxValidateErrorResponse($validator->errors()->all())
        );
    }

    public function attributes()
    {
        return [
            'image.src' => 'Image',
            'image.title' => 'Image title',
            'image.alt' => 'Image alt',
        ];
    }

    public function slugValidate()
    {
        return 'required|max:200|unique:categories,slug,'.$this->id;
    }

    public function slugEnValidate()
    {
        return 'required|max:200|unique:categories,slug_en,'.$this->id;
    }
}
