<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\ExchangeRateController;
use \App\Http\Controllers\Admin\PropertyController;
use \App\Http\Controllers\Admin\BlogController;
use \App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\CheckOutController;
use App\Http\Controllers\Site\CustomerController;
use \App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin route
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.'],
    function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        //Category manager
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::post('category/data', [CategoryController::class, 'getDataTables'])->name('category.datatable');
        Route::get('category/edit-add/{id?}', [CategoryController::class, 'editAdd'])->name('category.editAdd');
        Route::get('category/delete/{id?}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::post('category/storeUpdate/{id?}', [CategoryController::class, 'storeUpdate'])->name('category.storeUpdate');

        //Category manager
        Route::get('blog_category', [BlogCategoryController::class, 'index'])->name('blog_category.index');
        Route::post('blog_category/data', [BlogCategoryController::class, 'getDataTables'])->name('blog_category.datatable');
        Route::get('blog_category/edit-add/{id?}', [BlogCategoryController::class, 'editAdd'])->name('blog_category.editAdd');
        Route::get('blog_category/delete/{id?}', [BlogCategoryController::class, 'delete'])->name('blog_category.delete');
        Route::post('blog_category/storeUpdate/{id?}', [BlogCategoryController::class, 'storeUpdate'])->name('blog_category.storeUpdate');

        //Exchange rate manager
        Route::get('exchange-rate', [ExchangeRateController::class, 'index'])->name('exchange_rate.index');
        Route::post('exchange-rate/data', [ExchangeRateController::class, 'getDataTables'])->name('exchange_rate.datatable');
        Route::get('exchange-rate/edit-add/{id?}', [ExchangeRateController::class, 'editAdd'])->name('exchange_rate.editAdd');
        Route::get('exchange-rate/delete/{id?}', [ExchangeRateController::class, 'delete'])->name('exchange_rate.delete');
        Route::post('exchange-rate/storeUpdate/{id?}', [ExchangeRateController::class, 'storeUpdate'])->name('exchange_rate.storeUpdate');

        //Property manager
        Route::get('property', [PropertyController::class, 'index'])->name('property.index');
        Route::post('property/data', [PropertyController::class, 'getDataTables'])->name('property.datatable');
        Route::get('property/edit-add/{id?}', [PropertyController::class, 'editAdd'])->name('property.editAdd');
        Route::get('property/delete/{id?}', [PropertyController::class, 'delete'])->name('property.delete');
        Route::post('property/storeUpdate/{id?}', [PropertyController::class, 'storeUpdate'])->name('property.storeUpdate');

        //Blog manager
        Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
        Route::post('blog/data', [BlogController::class, 'getDataTables'])->name('blog.datatable');
        Route::get('blog/edit-add/{id?}', [BlogController::class, 'editAdd'])->name('blog.editAdd');
        Route::get('blog/delete/{id?}', [BlogController::class, 'delete'])->name('blog.delete');
        Route::post('blog/storeUpdate/{id?}', [BlogController::class, 'storeUpdate'])->name('blog.storeUpdate');

        //Page manager
        Route::get('page', [PageController::class, 'index'])->name('page.index');
        Route::post('page/data', [PageController::class, 'getDataTables'])->name('page.datatable');
        Route::get('page/edit-add/{id?}', [PageController::class, 'editAdd'])->name('page.editAdd');
        Route::get('page/delete/{id?}', [PageController::class, 'delete'])->name('page.delete');
        Route::post('page/storeUpdate/{id?}', [PageController::class, 'storeUpdate'])->name('page.storeUpdate');

        //Product manager
        Route::get('product', [ProductController::class, 'index'])->name('product.index');
        Route::post('product/data', [ProductController::class, 'getDataTables'])->name('product.datatable');
        Route::get('product/edit-add/{id?}', [ProductController::class, 'editAdd'])->name('product.editAdd');
        Route::get('product/delete/{id?}', [ProductController::class, 'delete'])->name('product.delete');
        Route::post('product/storeUpdate/{id?}', [ProductController::class, 'storeUpdate'])->name('product.storeUpdate');

        //Menu manager
        Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
        Route::post('menu/data', [MenuController::class, 'getDataTables'])->name('menu.datatable');
        Route::get('menu/edit-add/{id?}', [MenuController::class, 'editAdd'])->name('menu.editAdd');
        Route::get('menu/delete/{id?}', [MenuController::class, 'delete'])->name('menu.delete');
        Route::post('menu/storeUpdate/{id?}', [MenuController::class, 'storeUpdate'])->name('menu.storeUpdate');

        //Menu item manager
        Route::get('menu-item', [MenuItemController::class, 'index'])->name('menu_item.index');
        Route::get('menu-item-move/{id?}', [MenuItemController::class, 'menuItemMove'])->name('menu_item.menu_item_move');
        Route::post('menu-item-move-update/{id?}', [MenuItemController::class, 'menuItemMoveUpdate'])->name('menu_item.menu_item_move_update');
        Route::post('menu-item/data', [MenuItemController::class, 'getDataTables'])->name('menu_item.datatable');
        Route::get('menu-item/edit-add/{id?}', [MenuItemController::class, 'editAdd'])->name('menu_item.editAdd');
        Route::get('menu-item/delete/{id?}', [MenuItemController::class, 'delete'])->name('menu_item.delete');
        Route::post('menu-item/storeUpdate/{id?}', [MenuItemController::class, 'storeUpdate'])->name('menu_item.storeUpdate');

        //order manager
        Route::get('order', [OrderController::class, 'index'])->name('order.index');
        Route::post('order/data', [OrderController::class, 'getDataTables'])->name('order.datatable');
        Route::get('order/edit-add/{id?}', [OrderController::class, 'editAdd'])->name('order.editAdd');
        Route::get('order/delete/{id?}', [OrderController::class, 'delete'])->name('order.delete');
        Route::post('order/storeUpdate/{id?}', [OrderController::class, 'storeUpdate'])->name('order.storeUpdate');

        //setting manager
        Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
        Route::post('setting/data', [SettingController::class, 'getDataTables'])->name('setting.datatable');
        Route::get('setting/edit-add/{id?}', [SettingController::class, 'editAdd'])->name('setting.editAdd');
        Route::get('setting/delete/{id?}', [SettingController::class, 'delete'])->name('setting.delete');
        Route::post('setting/storeUpdate/{id?}', [SettingController::class, 'storeUpdate'])->name('setting.storeUpdate');
        Route::get('setting-detail', [SettingController::class, 'settingDetail'])->name('setting.settingDetail');
        Route::post('update-detail', [SettingController::class, 'updateDetail'])->name('setting.updateDetail');
    });

Route::get('category/', [SiteController::class, 'category']);
Route::get('list-category/{slug}', [SiteController::class, 'listCategory'])->name('list.category');
Route::get('category/category-2', 'App\Http\Controllers\Site\SiteController@categoryLv2')->name('categoryLv2');
Route::get('category-3/', 'App\Http\Controllers\Site\SiteController@categoryLv3')->name('categoryLv3');
Route::get('detail', 'App\Http\Controllers\Site\SiteController@detail')->name('detail');

Route::get('test', 'App\Http\Controllers\Site\SiteController@test')->name('test');

// Cart Route Master
Route::get('add-cart/{id}', 'App\Http\Controllers\Site\SiteController@addCart')->name('addCart');
Route::get('delete-item-cart/{id}', 'App\Http\Controllers\Site\SiteController@deleteItemCart')->name('deleteItem.cart');

// Cart Route List-Cart
Route::get('list-cart', [CheckOutController::class, 'listCart'])->name('listCart');
Route::post('list-cart', [CheckOutController::class, 'storeCheckOut'])->name('post.listCart');

Route::get('check-out', [SiteController::class, 'checkOut'])->name('check-out');
Route::get('del-item-list-cart/{id}', [SiteController::class, 'deleteItemListCart'])->name('delItem.listCart');
Route::get('list-cart-ajax', [SiteController::class, 'listCart'])->name('listCart.ajax');


/**
 * Route Custommer
 */
Route::get('customer/edit', [CustomerController::class, 'showCustomer'])->name('customer.show');
Route::get('customer/order', [CustomerController::class, 'listOrder'])->name('customer.order');
Route::get('customer/address', [CustomerController::class, 'customerAddress'])->name('customer.address');
Route::get('customer/comment', [CustomerController::class, 'customerComment'])->name('customer.comment');
Route::get('customer/address/create', [CustomerController::class, 'customerAddressCreate'])->name('customer.address-create');
Route::get('customer/wishlist', [CustomerController::class, 'customerWishlist'])->name('wishlist');

/**
 * Route Question
 */
Route::get('question', 'App\Http\Controllers\Site\QuestionController@create')->name('question');

/**
 * Route Blog
 */
Route::get('list-blog', 'App\Http\Controllers\Site\BlogController@listBlog')->name('list.blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\Site\BlogController@show')->name('show.blog');

/**
 * New Route Category
 */
Route::get('new-category', [SiteController::class, 'newCategory'])->name('new.category');
Route::get('new-detail', [SiteController::class, 'newDetail'])->name('new.detail');
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('product', function () {
    return view('site/category/all-product');
})->name('all.product');
/**
 *  Route Register user Complete and Order Complete
 */
Route::get('register-success', function () {
    return view('auth/register-complete');
});

Route::get('faq', function () {
    return view('site/FAQ/FAQ');
})->name('faq');

