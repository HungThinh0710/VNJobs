<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Organization;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    public function showListOrg(){
        $orgs = Organization::paginate(10);
        return view('dashboard.admin.list-org', compact('orgs'));
    }
}
