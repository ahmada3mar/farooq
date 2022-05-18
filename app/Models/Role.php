<?php

namespace App\Models;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    protected $appends = ['prepared_permissions'];

    public function getPreparedPermissionsAttribute()
    {
        return $this->permissions->pluck('name')->toArray();
    }

}
