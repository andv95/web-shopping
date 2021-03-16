<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog(){
        $blogs = Blog::getList()->paginate(3);
        $categories = BlogCategory::getList()->get();
        return view('site.blog.list-blog', ['blogs' => $blogs, 'categories' => $categories]);
    }

    public function show($slug = ''){
        $blog = Blog::getBySlug($slug);
        if(!$blog) {
            abort(404);
        }
        $categories = BlogCategory::getList()->get();
        return view('site.blog.blog-detail', ['blog' => $blog, 'categories' => $categories]);
    }
}
