<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentNews extends Model
{
    use Traits\RecruitmentNewsFilterable;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $table = 'recruitment_news';

    protected $fillable = ['org_id', 'author_id', 'major_id', 'title', 'content', ' address', 'city', 'work_type', 'start_time', 'end_time', 'interview_start_time', 'interview_end_time'];

    protected $filterable = [
        'title',
        'content',
        'city',
        'work_type'
    ];

    public function org()
    {
        return $this->belongsTo('App\Organization', 'org_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo('App\Major', 'major_id', 'id');
    }

    public function job_seekers()
    {
        return $this->belongsToMany(
            'App\User',
            'job_seekers',
            'rn_id',
            'user_id',
        );
    }
}
