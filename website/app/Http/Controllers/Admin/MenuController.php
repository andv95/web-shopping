<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Http\Requests\Admin\MenuRequest;
use App\Models\Admin\Menu;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new Menu();
        $this->slug = 'menu';
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
            ->editColumn('status', function ($data) {
                return view('admin.pages.include.on_off_without_jquery', ['check' => $data->status]);
            })
            ->editColumn('drag_drop', function ($data) {
                return '<a href="'. route('admin.menu_item.menu_item_move', $data->id) .'" class="btn btn-success">Kéo thả menu</a>';
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
        return view('admin.pages.'.$this->slug.'.edit_add', ['data' => $data]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, MenuRequest $request)
    {
        try {
            $params = $request->all();
            if (!empty($params['status']) && $params['status']=='on') {
                $params['status'] = 1;
            } else {
                $params['status'] = 0;
            }
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
