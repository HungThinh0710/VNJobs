<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interviewer extends Model
{
    use HasFactory;

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
