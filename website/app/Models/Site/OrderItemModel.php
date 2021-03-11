<?php

namespace App\Models\site;

use App\Models\Admin\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItemModel extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'product_id', 'number', 'color', 'size', 'price'
    ];

    public function orders()
    {
        return $this->belongsTo('App\Models\Site\OrdersModel','order_id','id');
    }

    public function size()
    {
        return $this->hasOne(Property::class, 'size');
    }

    public function color()
    {
        return $this->hasOne(Property::class, 'color');
    }

    protected static function store (array $params =[]){
        $order = new OrderItemModel();
        $order -> fill($params);
        $order['order_id'] = $params['order_id'];
        $order['product_id'] = $params['productInfo']->id;
        $order['number'] = $params['quanty'];
        $order['price'] = $params['price'];
        $order -> save();

        return[$order];
    }

}
