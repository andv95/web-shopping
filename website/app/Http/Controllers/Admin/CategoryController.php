<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\NotFoundRecord;
use App\Helper\Helper;
use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin
 * @property Category $model
 */
class CategoryController extends Controller
{
    use BaseController;

    private $model;
    public function __construct()
    {
        $this->model = new Category();
    }

    /**
     * Get list category.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.pages.category.index');
    }

    public function getDataTables(Request $request)
    {
        return DataTables::of($this->model::getList($request->all()))
            ->escapeColumns([])
            ->editColumn('image', function ($category){
                $image = ($category->getImage());
                return view('admin.pages.include.image', ['image' => $image]);
            })
            ->addColumn('action', function ($category) {
                return view('admin.pages.include.action', ['edit' => route('admin.category.editAdd', $category->id), 'delete' => route('admin.category.delete', $category->id)]);
            })
            ->make(true);
    }

    /**
     * Get page add or edit.
     * @param  null  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editAdd($id = null)
    {
        $category = $this->model::getByID($id);
        return view('admin.pages.category.edit_add', ['category' => $category]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUpdate($id = null, Request $request)
    {
        try {
            $params = $request->all();

            $this->model::storeUpdate($params, $id);

            return redirect()->route('admin.category.index')->with(Helper::MESSAGE_SUCCESS, __('message.action.success'));
        }
        catch (\Throwable $throwable) {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }


}
