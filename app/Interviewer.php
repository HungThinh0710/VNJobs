<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    protected $table = 'interviewers';

    protected $fillable = [
        'rn_id',
        'user_id',
        'is_elect',
        'cv_path',
        'cover_letter_path',
        'cover_letter_path',
        'exp_years',
    ];

    // public $timestampts = true; //already exist with default laravel
}
