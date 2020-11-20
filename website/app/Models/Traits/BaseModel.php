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
        $query = $query->orderBy('id', 'desc');
        if (method_exists(self::class, 'orderByData')) {
            $query = self::orderByData($query, $params);
        }
        return $query;
    }

    /**
     * Get model by id.
     * @param $id
     * @return mixed
     */
    public static function getByID($id)
    {
        return self::query()->where('id', $id)->first();
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
        $data->fill($params);
        $data->save();

        return $data;
    }

    /**
     * Get image.
     * @return mixed
     */
    public function getImage()
    {
        return  json_decode($this->image);
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
