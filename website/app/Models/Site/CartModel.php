<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    public static function getFirstById($id){
        $product = CartModel::query()->where('id',$id)->first();
        return $product;
    }

    public static function  getList(array $params = []){
        $query = CartModel::query()->get();
        return $query;
    }

    public function addCart($id){

    }
}
