<?php

namespace App\Http\Controllers\Dashboard\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Admin\LoginRequest;
use Auth;
class OrgAuthenticateController extends Controller
{
    public function showLogin()
    {
        return view("dashboard.org.login");
    }

    public function login(LoginRequest $request)
    {
        $credential = ['email' => $request->input('email'), 'password' => $request->input('password')];
        if (Auth::attempt($credential))
            return redirect()->route('org_show_index');
        else
            return back()->withErrors('Tài khoản hoặc mật khẩu không đúng')->withInput($request->only('email'));
    }
}
