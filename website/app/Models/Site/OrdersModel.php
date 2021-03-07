<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;
    protected $table = "orders";


    protected $fillable = [
        'user_id', 'user_name', 'user_phone', 'email', 'address', 'total', 'status'
    ];
    public function orderItem()
    {
        return $this->hasMany('App\Models\Site\OrderItemModel','order_id','id');
    }
    protected static function store (array $params =[]){
        $order = new OrdersModel();
        $order -> fill($params);
        $order -> save();

        return[$order];
    }

    protected static function lastOrder (){
        $lastOrder = OrdersModel::query()->latest()->first();
        return $lastOrder;
    }
}
