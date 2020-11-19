<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::post('category/data', [CategoryController::class, 'getDataTables'])->name('category.datatable');
        Route::get('category/edit-add/{id?}', [CategoryController::class, 'editAdd'])->name('category.editAdd');
        Route::get('category/delete/{id?}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::post('category/storeUpdate/{id?}', [CategoryController::class, 'storeUpdate'])->name('category.storeUpdate');


    });

Route::get('category/', 'App\Http\Controllers\Site\SiteController@category');
Route::get('category/category-2', 'App\Http\Controllers\Site\SiteController@categoryLv2')->name('categoryLv2');
Route::get('category/category-3', 'App\Http\Controllers\Site\SiteController@categoryLv3')->name('categoryLv3');
Route::get('detail', 'App\Http\Controllers\Site\SiteController@detail')->name('detail');
