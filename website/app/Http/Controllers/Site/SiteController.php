<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site\ProductModel;
use App\Models\Site\CartModel;
use Session;
use App\Cart;
use Brian2694\Toastr\Facades\Toastr;

class SiteController extends Controller
{
    public function getList(Request $request)
    {

    }
    public function category(){

        return view('site.category');
    }
    public function categoryLv2(){

        return view('site.category-lv2');
    }
    public function categoryLv3(Request $request){
            // dd(111);
        $products = CartModel::getList($request->all());

        return view('site.categorypath',['products'=>$products]);
    }
    public function detail(){

        return view('site.detail');
    }
    public function test(){

        return view('templates.master-menu');
    }

    public function newCategory(){
        return view('site.category.new-category');
    }

    public function newDetail(){
        return view('site.category.new-detail');
    }

    public function checkOut(){
        return view('site.check-out.check-out');
    }

    public function addCart(Request $request, $id){
        $product = CartModel::getFirstById($id);
        if ($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $request->session()->put('Cart', $newCart);
        }
        // dd(Session('Cart')->products);
        $quantyCart = count(Session('Cart')->products);
        Toastr::success('Post added successfully :)','Success');
        // dd($quantyCart);
        return view('site/ajaxCart/cart', compact('newCart','quantyCart'));
    }

    public function deleteItemCart(Request $request, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        // dd($newCart);
        if(count(Session('Cart')->products) > 0){
            $request -> Session('Cart')->put('Cart', $newCart);
        }else{
            $request->Session('Cart')->forget('Cart');
        }
        $quantyCart = count(Session('Cart')->products);
        return view('site/ajaxCart/cart', compact('newCart','quantyCart'));
    }

    public function listCart(){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart = $newCart->products;
        // dd($newCart);
        return view('site/list-cart',compact('newCart'));
    }

    /**
     * Delete item product in view list cart
     */
    public function deleteItemListCart(Request $request, $id){
        // dd(Session::get("Cart"));
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        // dd($newCart);
        if(count(Session('Cart')->products) > 0){
            $request -> Session('Cart')->put('Cart', $newCart);
        }else{
            $request->Session('Cart')->forget('Cart');
        }
        $quantyCart = count(Session('Cart')->products);

        return view('site/ajaxCart/list-cart', compact('newCart','quantyCart'));
    }
}
