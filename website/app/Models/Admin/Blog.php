<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'blogs';
    protected $casts = ['image'];
    protected $fillable = ['title', 'slug', 'image', 'except', 'description', 'lang', 'post_relate_lang'];
}
