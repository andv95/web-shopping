<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get list category.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.pages.category.index');
    }


    public function editAdd($id = null)
    {
        $category = Category::getByID($id);
        return view('admin.pages.category.edit_add', ['category' => $category]);
    }

    public function storeUpdate($id = null, Request $request)
    {
        try {
            $params = $request->all();

            Category::storeUpdate($params, $id);

            return redirect()->route('admin.category.index')->with(Helper::MESSAGE_SUCCESS, __('message.action.success'));
        }
        catch (\Throwable $throwable) {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }
}
