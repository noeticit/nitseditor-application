<?php

namespace Nitseditor\Application\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends AbstractModel
{
    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany('Nitseditor\Framework\Models\User', 'user_roles', 'role_id', 'user_id');
    }

    public function pages()
    {
        return $this->belongsToMany('Nitseditor\Framework\Models\Page', 'roles_pages', 'role_id', 'page_id');
    }

}
