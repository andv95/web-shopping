<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Admin\Category;
use App\Models\Admin\ExchangeRate;
use App\Models\Admin\Product;
use App\Models\Admin\Property;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Class ProductController
 * @package App\Http\Controllers\Admin
 * @property Product $model
 * @property string $slug
 */
class ProductController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new Product();
        $this->slug = 'product';
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
            ->editColumn('image', function ($data) {
                $image = ($data->getImage());
                return view('admin.pages.include.image', ['image' => $image]);
            })
            ->editColumn('price', function ($data) {
                return show_price($data->price);
            })
            ->editColumn('quantity_warehouse', function ($data) {
                $warehouse = view('admin.pages.include.on_off_without_jquery', ['check' => $data->flg_warehouse]);
                return $data->quantity_warehouse .' '. $warehouse;
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
        $data = $this->model::getByID($id, 'productProperties');
        $relateProperties = !empty($data->productProperties) ? ($data->productProperties) : '';
        $route = route('admin.'. $this->slug .'.storeUpdate', (@($data->id) ? $data->id : ''));
        $categories = Category::getList()->get();
        $categoryIds = @$data ? $data->categories->pluck('id') : '';
        $exchanges = ExchangeRate::getList()->get();
        $colors = Property::getList(['type' => Property::TYPE_COLOR])->get();
        $sizes = Property::getList(['type' => Property::TYPE_SIZE])->get();
        $propertyIds = @$data ? $data->properties->pluck('id') : '';
        return view('admin.pages.'.$this->slug.'.edit_add',
            [
                'data' => $data,
                'route' => $route,
                'categories' => $categories,
                'categoryIds' => $categoryIds,
                'colors' => $colors,
                'sizes' => $sizes,
                'propertyIds' => $propertyIds,
                'exchanges' => $exchanges,
                'relateProperties' => $relateProperties
            ]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, ProductRequest $request)
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
