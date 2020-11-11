<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentNew extends Model
{
    protected $table = 'recruitment_news';

    protected $fillable = ['org_id', 'user_id', 'major_id', 'title', 'content', ' address', 'start_time', 'end_time', 'interview_start_time', 'interview_end_time'];
}
