<?php

namespace App\Http\Controllers\Traits;

trait TreeTrait
{
    /**
     * @param string $relation
     * @param bool $all
     * @param array $parent_ids
     * @param string $key
     * @return array
     */
    public function get_children_ids(string $relation, $all = false, $parent_ids = [], $key = 'parent'): array
    {
        if (!$all) {
            return $this->{$relation}->pluck('id')->toArray();
        }
        if ($parent_ids) {
            $ids = $this->whereIn($key, $parent_ids)->pluck('id')->toArray();
            return $ids ? array_merge($ids, $this->get_children_ids($relation, $all, $ids, $key)) : [];
        } else {
            $ids = $this->{$relation}->pluck('id')->toArray();
            return $ids ? array_merge($ids, $this->get_children_ids($relation, $all, $ids, $key)) : [];
        }
    }

    public static function tree_items($parent_ids = 0, $options = [])
    {
        $options = array_merge([
            'key' => 'parent_id',
            'order_by' => 'order',
            'order' => 'ASC',
            'where' => [],
            'select' => [],
        ], $options);

        $query = self::where($options['where']);
        if (!$parent_ids) {
            $query->where($options['key'], 0);
        } else {
            $query->whereIn($options['key'], $parent_ids);
        }
        if ($options['select']) {
            $select_fields = (array)$options['select'];
            if (!in_array($options['key'], $select_fields)) {
                $select_fields[] = $options['key'];
            }
            $query->select($select_fields);
        }
        if(@$options['menu_id']) {
            $query->where('menu_id', $options['menu_id']);
        }
        $items = $query->orderBy($options['order_by'], $options['order'])->get();
        $tree = [];
        $idList = [];

        foreach ($items as $item) {
            $idList[] = $item->id;
            //$item->children = [];
            $tree[$item->id]['item'] = $item;
            $tree[$item->id]['children'] = [];
        }
        if ($idList) {
            $children = self::tree_items($idList, $options);
            foreach ($children as $child) {
                $tree[$child['item']->{$options['key']}]['children'][] = $child;
            }
        }

        return $tree;
    }
}
