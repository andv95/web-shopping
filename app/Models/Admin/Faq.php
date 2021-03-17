<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'faqs';
    protected $fillable = ['name', 'content', 'name_en', 'content_en'];
}
