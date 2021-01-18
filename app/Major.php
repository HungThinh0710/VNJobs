<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';

    protected $fillable = ['major_name', 'image_path'];

    public function orgs()
    {
        return $this->belongsTomany(
            'App\Organization', 
            'organizations_majors',
            'major_id',
            'org_id'
        );
    }

    // public function job_seekers() {
    //     return $this->belongsToMany(
    //         'App\JobSeeker', 
    //         'jobseekers_majors',
    //         'major_id',
    //         'js_id'
    //     );
    // }
    
    public function recruitment_news()
    {
        return $this->hasMany('App\RecruitmentNews','major_id', 'id');
    }
}
