<?php

namespace App\Http\Controllers\Site;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Site\OrdersModel;
use App\Models\Site\OrderItemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function listCart()
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart = $newCart->products;
//        dd($newCart);
        return view('site/list-cart', compact('newCart'));
    }

    public function storeCheckOut(Request $request)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart = $newCart->products;
        $request->validate(
            [
                'user_name' => array('required', 'regex:/^[^0-9]{3,20}$/', 'max:255'),
                'user_phone' => array('required', 'regex:/^[0-9]{9,10}$/', 'max:10'),
                'address' => array('required', 'max:255'),
            ],
            [
                'user_name.required' => 'Tên không được để trống',
                'user_name.regex' => 'Tên không đúng định dạng',
                'user_name.max' => 'Tên không quá 255 ký tự',
                'user_phone.required' => 'Số điện thoại không được để trống',
                'user_phone.regex' => 'Số điện thoại không đúng định dạng',
                'user_phone.max' => 'Số điện thoại không quá 10 ký tự',
                'address.required' => 'Địa chỉ không được để trống',
                'address.max' => 'Địa chỉ không quá 255 ký tự',
            ]
        );

        $user = Auth::user();
        $input = $request->all();

        if(Auth::user() == true){
            $input['user_id'] = Auth::user()->id;
        }

        OrdersModel::store($input);
        $orderId = OrdersModel::lastOrder();
        $orderId = $orderId->id;
        foreach ($newCart as $orderItem){
//            dump($orderItem['productInfo']->id);
            $orderItem['order_id'] = $orderId;
            OrderItemModel::store($orderItem);
        }

//        dd('end');
        session()->flash(
            $input ? 'success' : 'error',
            $input ? 'Bạn đã đặt hàng thành công!' : 'Đặt hàng thất bại!'
        );

        return redirect('home');
    }
}
