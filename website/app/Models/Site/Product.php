<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public static function getListCategory(array $params=[]){
        $getList = Product::query();
    }

    public static function getFirstById($id){
        $product = Product::query()->find($id);
        return $product;
    }
    public static function getList(array $params = []){
        $query = Product::query()->get();
        return $query;
    }

}
