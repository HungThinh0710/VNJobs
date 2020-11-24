<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';

    protected $fillable = ['owner_id', 'org_name', 'phones', 'description', 'tax_id', 'is_verify'];
}
