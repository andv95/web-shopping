<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends BaseRequest
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
            'except' => 'required|max:255',
            'image.src' => 'required|max:500',
            'image.title' => 'required|max:200',
            'image.alt' => 'required|max:200',
            'image_hover.src' => 'required|max:500',
            'image_hover.title' => 'required|max:200',
            'image_hover.alt' => 'required|max:200',
            //'images' => 'required|max:200',
            'price' => 'required',
            'quantity_warehouse' => 'required|max:10000',
            //'flg_warehouse' => 'max:2',
            'categories' => 'required',
            'properties' => 'required',
//            'description' => 'required',
//            'descriptions_images' => 'required',
//            'image_feedback' => 'required',
//            'lang' => 'required',
//            'post_relate_lang' => 'required|max:200',
        ];
    }
}
