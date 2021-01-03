<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentJobSeeker extends Model
{
    protected $table = 'recruitments_jobseekers';
 
    protected $fillable = ['rn_id', 'js_id'];
}
