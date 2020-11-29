<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\JobSeeker;
use App\Organization;
use App\RecruitmentNews;
use App\Major;

class TestController extends Controller
{
    public function show(){
        $user = User::with(['orgs','own_orgs', 'role','recruitment_news','applied_jobs'])->find(3);
        $Organization = Organization::with(['users','majors','recruitment_news'])->find(1);
        $RecruitmentNews = RecruitmentNews::with(['author', 'job_seekers','org'])->find(1);
        $Major = Major::with(['recruitment_news','orgs'])->find(1);


        return response()->json($user);
        echo "<\br>end";
        // return $User;
    }

}
