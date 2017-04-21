<?php
/**
 * Created by PhpStorm.
 * User: OldDev
 * Date: 19.04.2017
 * Time: 5:29
 */

namespace App\Models\Access\Product\Traits\Scope;

/**
 * Class ProductScope.
 */
trait ProductScope
{
    /**
     * @param $query
     * @param bool $is_visible
     *
     * @return mixed
     */
    public function scopeVisible($query, $is_visible = true)
    {
        return $query->where('is_visible', $is_visible);
    }
}
