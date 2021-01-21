<?php

namespace App\Http\Controllers\Dashboard\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showIndex()
    {
        return view('dashboard.org.index');
    }
}
