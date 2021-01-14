<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guarded = ['role_id'];

    protected $fillable = [
//        'role_id',
        'first_name',
        'last_name',
        'dob',
        'phone',
        'email',
        'email_verified_at',
        'password',
        'address',
        'bio',
        'avatar_path',
        'social_linkedin',
        'social_facebook'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'role_id',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne('App\Role','id', 'role_id');
    }

    public function orgs()
    {
        return $this->belongsToMany(
            'App\Organization',  // Intermediary Model Related
            'user_organization', // Intermediary table name
            'user_id',            // FK of 'user_organization' table (Intermediary table)
            'id'                  // PK of 'organizations' table (primary table) with intermediary table
        );
    }

    public function own_orgs()
    {
        return $this->hasMany('App\Organization', 'owner_id', 'id');
    }

    public function recruitment_news()
    {
        return $this->hasMany('\App\RecruitmentNews', 'author_id', 'id');
    }

    // public function applied_jobs()
    // {
    //     return $this->belongsToMany(
    //         'App\RecruitmentNews',
    //         'job_seekers',
    //         'user_id',
    //         'rn_id',
    //     );
    // }
}
