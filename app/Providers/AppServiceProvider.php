<?php

namespace App\Providers;

use App\Models\Site\Product;
use http\Env\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logan = setting('logan');
        if (!empty($logan)) {
            View::share('logan', $logan);
        }

        $maxim = setting('maxim');
        if (!empty($logan)) {
            $maximArr = explode("\r\n", $maxim);
            $randomKeys = array_rand($maximArr, 1);
            $maximDay = explode("_", $maximArr[$randomKeys]);
            session()->put('maxim_of_day', $maximDay);
        }

        //Chia sẻ dữ liệu Cart
//        $itemCart = \Cart::count();
//        $cart = \Cart::content();
//        $subtotal = \Cart::subtotal();
//        dd($itemCart,$cart,$subtotal);
//        View::share([
//            'itemCart' => $itemCart,
//            'cart' => $cart,
//            'subtotal' => $subtotal,
//        ]);
    }
}
