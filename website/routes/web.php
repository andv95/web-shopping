<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\ExchangeRateController;

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

    });

Route::get('category/', 'App\Http\Controllers\Site\SiteController@category');
Route::get('category/category-2', 'App\Http\Controllers\Site\SiteController@categoryLv2')->name('categoryLv2');
Route::get('category/category-3', 'App\Http\Controllers\Site\SiteController@categoryLv3')->name('categoryLv3');
Route::get('detail', 'App\Http\Controllers\Site\SiteController@detail')->name('detail');
