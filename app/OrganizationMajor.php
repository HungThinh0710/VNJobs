<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationMajor extends Model
{
    protected $table = 'organizations_majors';

    protected $fillable = ['org_id', 'major_id', 'role_id'];
}
