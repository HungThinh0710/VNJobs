<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerMajor extends Model
{
    protected $table = 'jobseekers_majors';
 
    protected $fillable = ['js_id', 'major_id'];
}
