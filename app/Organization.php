<?php

namespace App;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use Filterable;
    protected $table = 'organizations';

    protected $fillable = ['owner_id', 'org_name', 'phones', 'description', 'tax_id', 'is_verify', 'logo_path', 'cover_path'];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id', 'id');
    }

    public function users()
    {
        return $this->belongsTomany(
            'App\User',
            'user_organization',
            'org_id',
            'user_id'
        );
    }

    public function majors()
    {
        return $this->belongsTomany(
            'App\Major',
            'organizations_majors',
            'org_id',
            'major_id'
        );
    }

    public function roles()
    {
        return $this->belongsToMany(
            'App\Role',
            'user_organization',
            'org_id',
            'role_id'
        );
    }

    public function recruitment_news()
    {
        return $this->hasMany('App\RecruitmentNews','org_id', 'id');
    }
}
