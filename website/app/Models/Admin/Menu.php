<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'menus';
    protected $fillable = ['name', 'slug', 'status'];

    /**
     * Get relation menu items
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }
}
