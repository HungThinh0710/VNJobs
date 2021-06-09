<?php

namespace App\Http\Controllers\APIAdmin;

use App\Http\Controllers\Controller;
use App\JobSeeker;
use App\User;
use Illuminate\Http\Request;
use App\Organization;
use App\RecruitmentNews;

/**
 * @group Admin Endpoints
 *
 * APIs for Admin system
 */
class StatisticController extends Controller
{
    /**
     * Show Statistic.
     * APIs for analyst & statistic jobs.
     * @group Admin Endpoints
     */
    public function allStatistic()
    {
        $totalOrg = Organization::count();
        $totalNews = RecruitmentNews::count();
        $totalUser = User::count();
        $totalJobSeeker = JobSeeker::count();

        return response()->json([
            'total_org' =>  $totalOrg,
            'total_news' => $totalNews,
            'total_user' => $totalUser,
            'total_job_seeker' => $totalJobSeeker,
        ]);
    }
}
