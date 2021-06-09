<?php

namespace App\Http\Controllers\APIAdmin;

use App\Http\Controllers\Controller;
use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Show organizations.
     * Show all organizations list.
     * @group Admin Endpoints
     */
    public function showOrg()
    {
        $organizations = Organization::with('owner')->paginate(10);
        return response()->json($organizations);
    }
}
