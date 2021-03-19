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
        $itemCart = \Cart::count();
        return view('site/home/home', ['itemCart' => $itemCart]);
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

    public function detail($id)
    {
        if (Product::getFirstById($id) == null) {
            abort(404, 'Sản phẩm không tồn tại');
        }

        $itemCart = \Cart::count();
        $cart = \Cart::content();
        $subtotal = \Cart::subtotal();
        $product = Product::getFirstById($id);
        $property = $product->properties;

//        dd($cart);
//        \Cart::destroy();
        return view('site.category.new-detail',
            [
                'product' => $product,
                'properties' => $property,
                'itemCart' => $itemCart,
                'cart' => $cart,
                'subtotal' => $subtotal,
            ]);
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
        $colorName = Product::property($id);

        foreach ($colorName as $item) {
            if ($item['id'] == $request->size) {
                $nameProperties['size'] = $item['name'];
            }
            if ($item['id'] == $request->color) {
                $nameProperties['color'] = $item['name'];
            }
        }

        //Add sản phẩm vào Cart
        \Cart::add(
            $id . '_' . $request->size . '_' . $request->color,
            $product['name'], $request->quantity,
            $product['price'],
            0,
            [
                'size' => $request->size,
                'color' => $request->color,
                'size-name' => $nameProperties['size'],
                'color-name' => $nameProperties['color'],
            ]);

        return redirect()->back()->with(['product' => $product]);
    }

    public function updateItemCart(Request $request, $id)
    {
        \Cart::update($request->rowId, $request->qty);
        return redirect()->back();
    }

    public function deleteItemCart($id)
    {
        \Cart::remove($id);
        return redirect()->back();
    }

}
