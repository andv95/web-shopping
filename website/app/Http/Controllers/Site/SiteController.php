<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site\Product;
use App\Models\Site\CartModel;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Cart;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Site\OrderRequest;

class SiteController extends Controller
{
    public function getList(Request $request)
    {

    }

    public function category()
    {

        return view('site.category');
    }

    public function listCategory()
    {
        return view('site.category.list-category');
    }

    public function categoryLv2()
    {

        return view('site.category-lv2');
    }

    public function categoryLv3(Request $request)
    {
        // dd(111);
        $products = CartModel::getList($request->all());

        return view('site.categorypath', ['products' => $products]);
    }

    public function detail()
    {

        return view('site.detail');
    }

    public function test()
    {

        return view('templates.master-menu');
    }

    public function newCategory()
    {

        $categories = Product::getList();
        return view('site.category.new-category', ['categories' => $categories]);
    }

    public function newDetail()
    {
        $products = Product::getList();
        return view('site.category.new-detail', ['products' => $products]);
    }

    public function checkOut()
    {
        return view('site.check-out.check-out');
    }

    public function addCart(Request $request, $id)
    {
        $product = CartModel::getFirstById($id);
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $request->session()->put('Cart', $newCart);
        }
        // dd(Session('Cart')->products);
        $quantyCart = count(Session('Cart')->products);
        Toastr::success('Post added successfully :)', 'Success');
        // dd($quantyCart);
        return view('site/ajaxCart/cart', compact('newCart', 'quantyCart'));
    }

    public function deleteItemCart(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        // dd($newCart);
        if (count(Session('Cart')->products) > 0) {
            $request->Session('Cart')->put('Cart', $newCart);
        } else {
            $request->Session('Cart')->forget('Cart');
        }
        $quantyCart = count(Session('Cart')->products);
        return view('site/ajaxCart/cart', compact('newCart', 'quantyCart'));
    }



    /**
     * Delete item product in view list cart
     */
    public function deleteItemListCart(OrderRequest $request, $id)
    {
        // dd(Session::get("Cart"));
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        // dd($newCart);
        if (count(Session('Cart')->products) > 0) {
            $request->Session('Cart')->put('Cart', $newCart);
        } else {
            $request->Session('Cart')->forget('Cart');
        }
        $quantyCart = count(Session('Cart')->products);

        return view('site/ajaxCart/list-cart', compact('newCart', 'quantyCart'));
    }
}
