<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCategoryRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\BlogControllerRequest;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Category;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BlogCategoryController extends Controller
{
    use BaseController, HasAjaxRequest;

    private $model;

    public function __construct()
    {
        $this->model = new BlogCategory();
    }

    /**
     * Get list category.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.pages.blog_category.index');
    }

    public function getDataTables(Request $request)
    {
        return DataTables::of($this->model::getList($request->all()))
            ->escapeColumns([])
            ->addColumn('action', function ($category) {
                return view('admin.pages.include.action', [
                    'edit' => route('admin.blog_category.editAdd', $category->id),
                    'delete' => route('admin.blog_category.delete', $category->id)
                ]);
            })
            ->make(true);
    }

    /**
     * Get pages add or edit.
     * @param  null  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editAdd($id = null)
    {
        $category = $this->model::getByID($id);
        return view('admin.pages.blog_category.edit_add', ['category' => $category]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUpdate($id = null, BlogCategoryRequest $request)
    {
        try {
            $params = $request->all();
            $this->model::storeUpdate($params, $id);
            return $this->ajaxSuccessResponse(
                ['url' => route('admin.blog_category.index')],
                __('message.action.success')
            );
        } catch (\Throwable $throwable) {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }
}
