<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'pages';
    protected $casts = ['image'];
    protected $fillable = ['title', 'slug', 'image', 'except', 'description', 'lang', 'post_relate_lang'];

    public function blogCategories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_category', 'blog_id', 'category_id');
    }

    public function getTime()
    {
        //7:00 AM, 12/15/2020
        return date('H:i:a m/d/Y', strtotime($this->created_at));
    }

    public static function getBlogByCategory($categoryId) {
        return DB::table('blogs')
                ->join('blog_category', 'blogs.id', '=', 'blog_category.category_id')
                ->where('blog_category.category_id', '=', $categoryId)
            ->paginate(1);
    }
}
