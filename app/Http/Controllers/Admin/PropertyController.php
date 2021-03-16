<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExchangeRateRequest;
use App\Http\Requests\Admin\PropertyRequest;
use App\Models\Admin\Property;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

/**
 * Class PropertyController
 * @package App\Http\Controllers\Admin
 * @property Property $model
 * @property string $slug
 */
class PropertyController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new Property();
        $this->slug = 'property';
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
            ->editColumn('type', function ($data) {
                return __('const.property_type'. $data->type);
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
     * Get pages add or edit.
     * @param  null  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editAdd($id = null)
    {
        $data = $this->model::getByID($id);
        return view('admin.pages.'.$this->slug.'.edit_add', ['data' => $data]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, PropertyRequest $request)
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
