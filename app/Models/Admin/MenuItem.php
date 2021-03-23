<?php

namespace App\Models\Admin;

use App\Http\Controllers\Traits\TreeTrait;
use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory, BaseModel, TreeTrait;

    protected $table = 'menu_items';
    protected $fillable = ['menu_id', 'parent_id', 'name', 'link', 'type', 'order'];

    const TYPE_NORMAL = 0;
    const TYPE_BLANK = 1;

    const TYPES = [
      self::TYPE_NORMAL => '_self',
      self::TYPE_BLANK => '_blank'
    ];

    public static function getAllBySlugList($slug)
    {
        $menuList = Menu::getBySlug($slug);
        if (!empty($menuList)) {
            return MenuItem::tree_items(0 , ['menu_id' => $menuList->id]);
        }
        return  '';
    }
}
