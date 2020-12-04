<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Admin\Setting;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SettingController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new Setting();
        $this->slug = 'setting';
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
                return config('settings.type.'. $data->type);
            })
            ->editColumn('group', function ($data) {
                return config('settings.group.'. $data->group);
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
        $types = config('settings.type');
        $groups = config('settings.group');
        return view('admin.pages.'.$this->slug.'.edit_add', ['data' => $data, 'types' => $types, 'groups' => $groups]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, SettingRequest $request)
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

    public function settingDetail() {
        $types = config('settings.type');
        $groups = config('settings.group');
        return view('admin.pages.'.$this->slug.'.setting_detail', [
            'routeAdd' => route('admin.'.$this->slug.'.editAdd'),
            'groups' => $groups,
            'types' => $types,
            'settingConfigType' => config('settings.type')
        ]);
    }

    public function updateDetail(Request $request) {
        dd($request->all());
        return '';
    }
}
