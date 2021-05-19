<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $table = 'job_seekers';

    protected $fillable = [
        'rn_id',
        'user_id',
        'is_elect',
        'cv_path',
        'cover_letter_path',
        'exp_years',
    ];

    public function user()
    {
        return $this->hasOne('\App\User', 'id');
    }

    public function recruitment_news()
    {
        return $this->belongsTo('App\RecruitmentNews', 'rn_id', 'id')
          ->select(['id', 'org_id', 'title', 'address', 'city', 'work_type', 'start_time', 'end_time', 'interview_start_time', 'interview_end_time']);
    }
    // public function majors() {
    //     return $this->belongsToMany(
    //         'App\Major',
    //         'jobseekers_majors',
    //         'js_id',
    //         'major_id'
    //     );
    // }

    // public function applied_job() {
    //     return $this->belongsToMany(
    //         'App\User',
    //         'job_seekers',
    //         'js_id',
    //         'rn_id'
    //     );
    // }

    public $timestamps = true; //already exist with default laravel
}
