<?php
namespace App\Models\Traits;

use App\Exceptions\NotFoundRecord;
use Illuminate\Support\Facades\Storage;

trait BaseModel {
    /**
     * Get list all query in any model.
     * @param  array  $params
     * @param  array  $with
     * @return mixed
     */
    public static function getList($params= [], $with = [])
    {
        $query = self::query()->with($with);

        if (!empty($params['search_main_menu'])) {
            $query->where('menu_id', $params['search_main_menu']);
        }
        if (method_exists(self::class, 'filterConditional')) {
            $query = self::filterConditional($query, $params);
        }
        if (method_exists(self::class, 'orderByData')) {
            $query = self::orderByData($query, $params);
        }
        $query = $query->orderBy('id', 'desc');

        return $query;
    }

    /**
     * Get model by id.
     * @param $id
     * @param $with
     * @return mixed
     */
    public static function getByID($id, $with = [])
    {
        return self::query()->where('id', $id)->with($with)->first();
    }

    /**
     * Get model by slug.
     * @param $slug
     * @param array $with
     * @return mixed
     */
    public static function getBySlug($slug, $with = [])
    {
        return self::query()->where('slug', $slug)->first();
    }

    /**
     * Save or update data.
     * @param $params
     * @param $dataOrId
     * @param $request
     * @return BaseModel|mixed|static
     * @throws NotFoundRecord
     */
    public static function storeUpdate($params, $dataOrId, $request = [])
    {
        if ($dataOrId instanceof self) {
            $data = $dataOrId;
        }
        elseif (!is_null($dataOrId)) {
            $data = self::getByID($dataOrId);

            if (!$data) {
                throw new NotFoundRecord();
            }
        }
        else {
            $data = new self();
        }
        if (!empty($params['image'])) {
            $params['image'] = json_encode($params['image']);
        }

        if(!empty($params['file']) && $request->hasFile('file')) {
            $file = $request->file;
            $fileName = date('H-i-s_d-m-y').'_fileName'.$file->getClientOriginalName();
            Storage::disk('contact')->putFileAs('/', $file, $fileName, 'public');
            $params['file'] = $fileName;
        }

        if(!empty($params['slug']) && !empty($data->id)) {
            $allExceptSelf = self::getList()->where('id', '!=', $data->id)->pluck('slug')->toArray();
            if (in_array($params['slug'], $allExceptSelf)) {
                $params['slug'] = $params['slug']. '-1';
            }
        }

        if(!empty($params['slug_en']) && !empty($data->id)) {
            $allExceptSelf = self::getList()->where('id', '!=', $data->id)->pluck('slug_en')->toArray();
            if (in_array($params['slug_en'], $allExceptSelf)) {
                $params['slug_en'] = $params['slug_en']. '-1';
            }
        }
        $data->fill($params);
        $data->save();

        return $data;
    }

    /**
     * Get image.
     * @param  string  $fieldName
     * @return mixed
     * @property
     */
    public function getImage($fieldName = 'image')
    {
        return  json_decode($this->$fieldName);
    }

    /**
     * Get data post relate
     * @return \Illuminate\Http\RedirectResponse
     */
//    public function getRelatePostLanguage()
//    {
//        try {
//            return '$this->model::getByID($this->post_relate_lang)';
//        }
//        catch (\Throwable $throwable) {
//            return redirect()->back()->withErrors($throwable->getMessage());
//        }
//    }
}
