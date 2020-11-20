<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'categories';
    protected $casts = ['image'];
    protected $fillable = ['name', 'slug', 'image', 'except', 'name_en', 'slug_en', 'except_en', 'parent_id'];

    public static function filterConditional($query, $params)
    {
        if (!empty($params['search_name'])) {
            $query = $query->where('name', 'like',  '%'. $params['search_name']. '%');
        }
        return $query;
    }
}
