<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationMajor extends Model
{
    use HasFactory;

    protected $table = 'organizations_majors';
 
    protected $fillable = ['org_id', 'major_id'];
}
