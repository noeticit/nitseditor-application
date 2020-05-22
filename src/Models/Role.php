<?php

namespace Nitseditor\Application\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends AbstractModel
{
    use SoftDeletes;

    public function users()
    {
        return $this->hasMany('Nitseditor\Application\Models\User', 'role_id', 'id');
    }

    public function pages()
    {
        return $this->belongsToMany('Nitseditor\Application\Models\Page', 'roles_pages', 'role_id', 'page_id');
    }

}
