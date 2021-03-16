<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'pages';
    protected $casts = ['image'];
    protected $fillable = ['name', 'title', 'slug', 'image', 'excerpt', 'description', 'created_at', 'deleted_at', 'template'];
}
