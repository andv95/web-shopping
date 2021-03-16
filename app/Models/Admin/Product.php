<?php

namespace App\Models\Admin;

use App\Exceptions\NotFoundRecord;
use App\Models\ProductProperties;
use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'products';
    protected $casts = ['image', 'image_hover', 'images', 'descriptions_images', 'image_feedback'];
    protected $fillable = ['name', 'slug', 'except', 'image', 'image_hover', 'images', 'price', 'quantity_warehouse', 'flg_warehouse', 'description', 'descriptions_images', 'image_feedback', 'lang', 'post_relate_lang'];

    /**
     * Get relation with categories table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    /**
     * Get relation with properties table
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'product_property', 'product_id', 'size_id');
    }

    public function productProperties()
    {
        return $this->hasMany(ProductProperties::class, 'product_id');
    }

    /**
     * Save or update data.
     * @param $params
     * @param $dataOrId
     * @return BaseModel|mixed|static
     * @throws NotFoundRecord
     */
    public static function storeUpdate($params, $dataOrId)
    {
        if ($dataOrId instanceof self) {
            $data = $dataOrId;
        } elseif (!is_null($dataOrId)) {
            $data = self::getByID($dataOrId);

            if (!$data) {
                throw new NotFoundRecord();
            }
        } else {
            $data = new self();
        }

        if (!empty($params['price'])) {
            $price = str_replace(',', '', $params['price']);
            $params['price'] = (int)$price;
        }
        if (!empty($params['image'])) {
            $params['image'] = json_encode($params['image']);
        }
        if (!empty($params['image_hover'])) {
            $params['image_hover'] = json_encode($params['image_hover']);
        }
        if (!empty($params['images'])) {
            $params['images'] = json_encode($params['images']);
        }
        if (!empty($params['descriptions_images'])) {
            $params['descriptions_images'] = json_encode($params['descriptions_images']);
        }
        if (!empty($params['image_feedback'])) {
            $params['image_feedback'] = json_encode($params['image_feedback']);
        }
        if (!empty($params['flg_warehouse']) && $params['flg_warehouse'] == 'on') {
            $params['flg_warehouse'] = 1;
        } else {
            $params['flg_warehouse'] = 0;
        }

        if (!empty($params['slug']) && !empty($data->id)) {
            $allExceptSelf = self::getList()->where('id', '!=', $data->id)->pluck('slug')->toArray();
            if (in_array($params['slug'], $allExceptSelf)) {
                $params['slug'] = $params['slug'] . '-1';
            }
        }
        $data->fill($params);
        $data->save();

        $data->properties()->detach();
        $data->properties()->attach($params['properties']);

        $data->categories()->detach();
        $data->categories()->attach($params['categories']);

        return $data;
    }
}
