<?php

namespace Nitseditor\Application\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends AbstractModel
{
    use SoftDeletes;

    public function roles()
    {
        return $this->belongsToMany('Nitseditor\Application\Models\Role', 'roles_pages','page_id', 'role_id');
    }
}
