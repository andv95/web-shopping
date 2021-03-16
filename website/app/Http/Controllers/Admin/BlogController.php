<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Class BlogController
 * @package App\Http\Controllers\Admin
 * @property Blog $model
 * @property string slug
 */
class BlogController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new Blog();
        $this->slug = 'blog';
    }

    /**
     * Get list category.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.pages.'.$this->slug.'.index',
            [
                'routeAdd' => route('admin.'.$this->slug.'.editAdd'),
                'routeList' => route('admin.'.$this->slug.'.datatable')
            ]);
    }

    public function getDataTables(Request $request)
    {
        return DataTables::of($this->model::getList($request->all()))
            ->escapeColumns([])
            ->editColumn('lang', function ($data) {
                return __('const.lang'. $data->lang);
            })
            ->editColumn('categories', function ($data) {
                $categoryNames = $data->blogCategories->pluck('name');
                if (!empty($categoryNames)) {
                    $name = '';
                    foreach ($categoryNames as $categoryName) {
                        $name .= '<span class="label bg-green" style="padding: 3px 5px;">'.$categoryName.'</span>   ';
                    }
                    return  $name;
                }
                return '';
            })
            ->editColumn('image', function ($data){
                $image = ($data->getImage());
                return view('admin.pages.include.image', ['image' => $image]);
            })
            ->addColumn('action', function ($data) {
                return view('admin.pages.include.action', [
                    'edit' => route('admin.'.$this->slug.'.editAdd', $data->id),
                    'delete' => route('admin.'.$this->slug.'.delete', $data->id)
                ]);
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
        $data = $this->model::getByID($id);
        $categories = BlogCategory::getList()->get();
        $categoryIds = @$data ? $data->blogCategories->pluck('id') : '';
        return view('admin.pages.'.$this->slug.'.edit_add', ['data' => $data, 'categories' => $categories, 'categoryIds' => $categoryIds]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, BlogRequest $request)
    {
        try {
            $params = $request->all();
            $this->model::storeUpdate($params, $id);
            return $this->ajaxSuccessResponse(
                ['url' => route('admin.'.$this->slug.'.index')],
                __('message.action.success')
            );
        } catch (\Throwable $throwable) {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }
}
