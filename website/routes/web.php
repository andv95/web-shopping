<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@index');
});

Route::get('category/','App\Http\Controllers\Site\SiteController@category');
Route::get('category/category-2', 'App\Http\Controllers\Site\SiteController@categoryLv2')->name('categoryLv2');
Route::get('category/category-3', 'App\Http\Controllers\Site\SiteController@categoryLv3')->name('categoryLv3');
Route::get('detail', 'App\Http\Controllers\Site\SiteController@detail')->name('detail');