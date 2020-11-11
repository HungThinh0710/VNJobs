<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function show(){
        $user = User::find(1)->role;
        return $user;
    }
}
