<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\ExchangeRateController;
use \App\Http\Controllers\Admin\PropertyController;
use \App\Http\Controllers\Admin\BlogController;

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

Route::get('/', function () {
    return view('welcome');
});

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
    });

Route::get('category/', 'App\Http\Controllers\Site\SiteController@category');
Route::get('category/category-2', 'App\Http\Controllers\Site\SiteController@categoryLv2')->name('categoryLv2');
Route::get('category/category-3', 'App\Http\Controllers\Site\SiteController@categoryLv3')->name('categoryLv3');
Route::get('detail', 'App\Http\Controllers\Site\SiteController@detail')->name('detail');
