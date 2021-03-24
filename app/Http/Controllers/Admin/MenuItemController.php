<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuItemRequest;
use App\Http\Requests\Admin\MenuRequest;
use App\Models\Admin\Menu;
use App\Models\Admin\MenuItem;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MenuItemController extends Controller
{
    use BaseController, HasAjaxRequest;
    private $model;
    private $slug;

    public function __construct()
    {
        $this->model = new MenuItem();
        $this->slug = 'menu_item';
    }

    /**
     * Get list category.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $menus = Menu::getList()->get();
        return view('admin.pages.'.$this->slug.'.index',
            [
                'routeAdd' => route('admin.'.$this->slug.'.editAdd'),
                'routeList' => route('admin.'.$this->slug.'.datatable'),
                'menus' => $menus
            ]);
    }

    public function getDataTables(Request $request)
    {
        return DataTables::of($this->model::getList($request->all()))
            ->escapeColumns([])
            ->editColumn('menu_id', function ($data) {
                return Menu::getByID($data->menu_id)->name;
            })
            ->addColumn('action', function ($data) {
                return view('admin.pages.include.action', [
                    'edit' => route('admin.'.$this->slug.'.editAdd', $data->id),
                    'delete' => route('admin.'.$this->slug.'.delete', $data->id)
                ]);
            })
            ->make(true);
    }

    public function menuItemMove($id = null)
    {
        try {
            if (!$id || !$menu = Menu::getByIdRelation($id)) {
                return abort(Helper::HTTP_NOT_FOUND);
            }
            $menuItems = MenuItem::tree_items(0 , ['menu_id' => $id]);

            return view('admin.pages.'. $this->slug. '.menu_item_drag_drop', [
                'menuItems' => $menuItems,
                'menu' => $menu,
                'routeAdd' => route('admin.menu.editAdd', $id)
            ]);
        }
        catch (\Throwable $throwable)
        {
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }

    public function menuItemMoveUpdate($id = null, Request $request)
    {
        DB::beginTransaction();
        try {
            if (!$id || !$menu = Menu::getByIdRelation($id)) {
                return $this->ajaxErrorResponse(Helper::HTTP_NOT_FOUND, __('message.not_found_record'));
            }
            $menuItems = ($request->get('ids'));
            $this->saveMenu(0, $menuItems);
            foreach ($menuItems as $key=>$menuItem) {
                $menuItemId = $menuItem['id'];
                $menu = MenuItem::getByID($menuItemId);
                $menu::storeUpdate(['order' => $key, 'parent_id' => 0], $menu->id);
                $parent = $menu->id;
                if (!empty($menuItem['children'])) {
                    foreach ($menuItem['children'] as $child) {
                        $item = MenuItem::getByID($child['id']);
                        $item::storeUpdate(['order' => $key, 'parent_id' => $parent], $item->id);
                    }
                }
                DB::commit();
            }
            return $this->ajaxSuccessResponse([], __('message.action.success'));
        }
        catch (\Throwable $throwable) {
            //DB::rollBack();
            return $this->ajaxErrorResponse(Helper::HTTP_SERVE_ERROR, __('message.wrong'));
        }
    }

    public function saveMenu($parent = 0, $menuItems)
    {
        foreach ($menuItems as $key=>$menuItem) {
            $menuItemId = $menuItem['id'];
            $menu = MenuItem::getByID($menuItemId);
            $menu::storeUpdate(['order' => $key, 'parent_id' => $parent], $menu->id);
            if (!empty($menuItem['children'])) {
                foreach ($menuItem['children'] as $child) {
                    $parent = $menu->id;
                    $item = MenuItem::getByID($child['id']);
                    $item::storeUpdate(['order' => $key, 'parent_id' => $parent], $item->id);
                    if (!empty($child['children'])) {
                        $this->saveMenu($item->id, $child['children']);
                    }
                }
            }
            DB::commit();
        }
    }
    /**
     * Get pages add or edit.
     * @param  null  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editAdd($id = null)
    {
        $data = $this->model::getByID($id);
        $menus = Menu::getList()->get();
        return view('admin.pages.'.$this->slug.'.edit_add', ['data' => $data, 'menus' => $menus]);
    }

    /**
     * Save data.
     * @param  null  $id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeUpdate($id = null, MenuItemRequest $request)
    {
        DB::beginTransaction();
        try {
            $params = $request->all();
            $params['parent_id'] = @$params['parent_id'] ? $params['parent_id'] : 0;
//            if (!empty($params['status']) && $params['status']=='on') {
//                $params['status'] = 1;
//            } else {
//                $params['status'] = 0;
//            }
            $this->model::storeUpdate($params, $id);
            DB::commit();
            return $this->ajaxSuccessResponse(
                ['url' => route('admin.'.$this->slug.'.index')],
                __('message.action.success')
            );
        } catch (\Throwable $throwable) {
            DB::rollBack();
            return redirect()->back()->withErrors($throwable->getMessage());
        }
    }
}
