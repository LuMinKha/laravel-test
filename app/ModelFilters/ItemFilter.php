<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ItemFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function weight($size) {
        return $this->where('weight','=',$size);
    }

    public function minWeight($weight) {
        return $this->where('weight','>=',$weight);
    }

    public function color($color) {
        return $this->where('color','=',$color);
    }
}
