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

    public function getFirstById($id){
        $product = Product::query()->find($id);
    }
}
