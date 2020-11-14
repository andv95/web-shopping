<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function category(){
        
        return view('site.category');
    }
    public function categoryLv2(){

        return view('site.category-lv2');
    }
}
