<?php

namespace App\Http\Controllers\Dashboard\Org;

use App\Http\Controllers\Controller;
use App\JobSeeker;
use App\Organization;
use App\RecruitmentNews;
use Illuminate\Http\Request;

class RecruitmentNewsController extends Controller
{
    public function showListRecruitmentNews(Request $request)
    {
        $orgIdArray = Organization::where('owner_id', $request->user()->id)->pluck('id')->all();
        $recruitments = RecruitmentNews::whereIn('org_id', $orgIdArray)->paginate(10);
        return view('dashboard.org.list-recruitments', compact('recruitments'));
    }

    public function listJobseekersOfRecruitmentNews($recruitId)
    {

        $listJobSeekers = RecruitmentNews::findOrFail($recruitId);
//        dd($listJobSeekers->job_seekers);
        $jobSeekers = $listJobSeekers->job_seekers;
//        dd($jobSeekers);
//        dd($listJobSeekers);
        return view('dashboard.org.list-applied', compact('jobSeekers'));
    }

    public function writeNews()
    {
        return view('dashboard.org.write-news');
    }
}
