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

    const TYPE_TEXT = 0;
    const TYPE_TEXTAREA = 1;
    const TYPE_IMAGE = 2;
    const TYPE_IMAGES = 3;
    const TYPE_EDITOR = 4;
    const TYPE_SHOW_SAME = [self::TYPE_TEXT, self::TYPE_TEXTAREA, self::TYPE_EDITOR];

    public static function filterConditional($query, $params) {
        if (isset($params['group'])) {
            $query->where('group', $params['group']);
        }
        return $query;
    }

    public static function orderByData($query, $params) {
        return $query->orderBy('order', 'asc');
    }

    /**
     * Get image.
     * @param  string  $fieldName
     * @return mixed
     * @property
     */
    public function getImage($fieldName = 'description')
    {
        return  json_decode($this->$fieldName);
    }

    public static function getSetting($key)
    {
        $query = self::query()->where('key', '=', $key)->get()->toArray();
        if (!empty($query[0]['description'])) {
            if (in_array($query[0]['type'], self::TYPE_SHOW_SAME)) {
                return $query[0]['description'];
            }
            elseif ($query[0]['type'] == self::TYPE_IMAGE) {
                return json_decode($query[0]['description']);
            }
        }
        return '';
    }
}
