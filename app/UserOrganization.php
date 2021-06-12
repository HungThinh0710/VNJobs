<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    protected $table = 'user_organization';

    protected $fillable = ['org_id', 'user_id', 'role_id'];

    public function role()
    {
        return $this->hasOne('App\Role','id', 'role_id');
    }
}
