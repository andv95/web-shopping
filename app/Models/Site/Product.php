<?php

namespace App\Models\Site;

use App\Models\Admin\Property;
use App\Models\ProductProperties;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Site\PartnerSiteModel;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'product_property');
    }

    public function productProperties()
    {
        return $this->hasMany(ProductProperties::class, 'product_id');
    }

    public function partners(){
        return $this->belongsTo(PartnerSiteModel::class,'partner', 'id');
    }

    public static function getListCategory(array $params = [])
    {
        $getList = Product::query();
    }

    public static function getFirstById($id)
    {
        $product = Product::query()->find($id);
        return $product;
    }

    public static function getList(array $params = [])
    {
        $query = Product::query()->get();
        return $query;
    }

    public static function property($id){
        $nameProperty = Product::getFirstById($id)->properties;
        return $nameProperty;
    }

}
