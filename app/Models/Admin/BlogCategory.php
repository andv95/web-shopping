<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'blog_categories';
    protected $fillable = ['name', 'slug', 'name_en', 'slug_en'];

    /**
     * Get relation of products table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_category', 'blog_id', 'category_id');
    }
}
