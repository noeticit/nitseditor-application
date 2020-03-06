<?php

namespace Nitseditor\Application\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends AbstractModel
{
    use SoftDeletes;

    public function parent() {

        return $this->hasOne('Nitseditor\Framework\Models\Menu', 'id', 'parent_id');

    }

    public function children() {

        return $this->hasMany('Nitseditor\Framework\Models\Menu', 'parent_id', 'id');

    }

    public static function tree() {

        return static::with(implode('.', array_fill(0, 4, 'children')))->where('parent_id', '=', NULL)->get();

    }

}
