<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Property;
use App\Models\ProductProperties;
use Illuminate\Http\Request;
use App\Models\Site\Product;
use App\Models\Site\CartModel;
use Illuminate\Support\Facades\Auth;
use Session;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\Site\OrderRequest;
use Gloudemans\Shoppingcart\Cart;

class SiteController extends Controller
{
    public function index()
    {
        return view('site/home/home');
    }

    public function getList(Request $request)
    {

    }

    public function category()
    {

        return view('site.category');
    }

    public function listCategory($slug)
    {
        $blogCategory = BlogCategory::getBySlug($slug);
        if (!$blogCategory) {
            abort(404);
        }
        $categories = BlogCategory::getList()->get();
        $blogs = Blog::getBlogByCategory($blogCategory->id);
        //dd($blogs);
        return view('site.category.list-category', ['blogCategory' => $blogCategory, 'categories' => $categories, 'blogs' => $blogs]);
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

    public function detail($id)
    {
        $product = Product::getFirstById($id);
        $property = $product->properties;
//        dd(session('Cart'));
        return view('site.category.new-detail', ['product' => $product, 'properties' => $property]);
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

    public function checkOut()
    {
        return view('site.check-out.check-out');
    }

    public function storeAddCart(Request $request, $id)
    {

        // Check sản phẩm có tồn tại không?
        if (!$product = Product::getFirstById($id)) {
            Toastr::error('Sản phẩm không tồn tại.');

            return redirect()->back();
        }
        $product = Product::getFirstById($id);
        //Add sản phẩm vào Cart
        \Cart::add($id . '_' . $request->size . '_' . $request->color, $product['name'], $request->quantity, $product['price'], 0, ['size' => $request->size, 'color' => $request->color]);

        $cart = \Cart::content();
        dd(\Cart::count(),$cart);
        return redirect()->back()->with(['product' => $product, 'cart'=>$cart]);
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

    public function SaveItemListCart(Request $request, $id, $quanty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateCart($id, $quanty);

        $request->Session()->put('Cart', $newCart);

        return redirect()->back();
    }
}
