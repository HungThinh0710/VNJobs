<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['role_name'];

    public function org()
    {
        return $this->belongsTo('App\UserOrganization', 'id');
    }

    public function users()
    {
        return $this->belongsTomany(
            'App\User',
            'user_organization',
            'role_id',
            'user_id'
        );
    }
}
