<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'properties';
    protected $casts = ['image'];
    protected $fillable = ['name', 'slug', 'name_en', 'slug_en', 'type', 'image'];

    const TYPE_SIZE = 1;
    const TYPE_COLOR = 2;
    const TYPES = [
        self::TYPE_SIZE => 'Size',
        self::TYPE_COLOR => 'Color'
    ];

    /**
     * Get relation of products table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public static function filterConditional($query, $params)
    {
        if (!empty($params['type'])) {
            $query->where('type', '=', $params['type']);
        }
        return $query;
    }
}
