<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog(){
        return view('site.blog.list-blog');
    }

    public function show(){
        return view('site.blog.blog-detail');
    }
}
