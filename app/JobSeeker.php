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
        'cover_letter_path',
        'exp_years',
    ];

    public function user()
    {
        return $this->hasOne('\App\User', 'id');
    }

    // public $timestampts = true; //already exist with default laravel
}
