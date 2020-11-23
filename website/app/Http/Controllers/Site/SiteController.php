<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // 
    public function category(){
        
        return view('site.category');
    }
    public function categoryLv2(){

        return view('site.category-lv2');
    }
    public function categoryLv3(){
            // dd(111);
        return view('site.categorypath');
    }
    public function detail(){

        return view('site.detail');
    }
    public function test(){

        return view('templates.master-menu');
    }
}
