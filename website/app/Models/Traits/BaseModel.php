<?php
namespace App\Models\Traits;

use App\Exceptions\NotFoundRecord;

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
     * @return mixed
     */
    public static function getBySlug($slug)
    {
        return self::query()->where('slug', $slug)->first();
    }

    /**
     * Save or update data.
     * @param $params
     * @param $dataOrId
     * @return BaseModel|mixed|static
     * @throws NotFoundRecord
     */
    public static function storeUpdate($params, $dataOrId)
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
