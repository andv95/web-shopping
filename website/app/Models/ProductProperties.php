<?php

namespace App\Models;

use App\Models\Admin\Product;
use App\Models\Admin\Property;
use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperties extends Model
{
    use HasFactory, BaseModel;
    protected $table = 'product_property';
    protected $casts = ['image'];
//<<<<<<< HEAD
    protected $fillable = ['product_id', 'property_id', 'image', 'description', 'description_en', 'quantity'];

    public static function getFirstById($id)
    {
        $product = \App\Models\Site\Product::getFirstById($id);
        $productProperty = ProductProperties::query()
            ->select('product_property.*', 'properties.id')
            ->join('properties', 'properties.id', '=', 'product_property.property_id')
            ->where('product_id', $id)->get();
//        dd($productProperty);
        foreach ($productProperty as $productProperty) {
            $property = Property::getByID($product->property_id);
        }
        return [$productProperty];
    }

    public static function getById($id)
    {
//        $products =
    }
//=======
//    protected $fillable = ['product_id', 'color_id', 'size_id', 'image', 'description', 'description_en', 'quantity'];
//>>>>>>> a3d339c658d59988580fbd30f0ec7d34337cc476
}
