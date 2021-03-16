<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'blogs';
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

    public static function storeUpdate($params, $dataOrId)
    {
        if ($dataOrId instanceof self) {
            $data = $dataOrId;
        }
        elseif (!is_null($dataOrId)) {
            $data = self::getByID($dataOrId);

            if (!$data) {
                throw new NotFoundRecord();
            }
        }
        else {
            $data = new self();
        }

        if (!empty($params['image'])) {
            $params['image'] = json_encode($params['image']);
        }

        if(!empty($params['slug']) && !empty($data->id)) {
            $allExceptSelf = self::getList()->where('id', '!=', $data->id)->pluck('slug')->toArray();
            if (in_array($params['slug'], $allExceptSelf)) {
                $params['slug'] = $params['slug']. '-1';
            }
        }

        if(!empty($params['slug_en']) && !empty($data->id)) {
            $allExceptSelf = self::getList()->where('id', '!=', $data->id)->pluck('slug_en')->toArray();
            if (in_array($params['slug_en'], $allExceptSelf)) {
                $params['slug_en'] = $params['slug_en']. '-1';
            }
        }
        $data->fill($params);
        $data->save();

        $data->blogCategories()->detach();
        $data->blogCategories()->attach($params['categories']);
        return $data;
    }
}
