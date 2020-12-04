<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'settings';
    protected $fillable = ['name', 'key', 'type', 'group', 'description', 'order'];

    public static function filterConditional($query, $params) {
        if (isset($params['group'])) {
            $query->where('group', $params['group']);
        }
        return $query;
    }

    public static function orderByData($query, $params) {
        return $query->orderBy('order', 'asc');
    }
}
