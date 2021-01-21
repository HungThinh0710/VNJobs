<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Admin\LoginRequest;
use Auth;
class AuthenticateController extends Controller
{
    public function showLogin()
    {
        if(Auth::guard('admin')->check())
            return redirect(route('show_admin'));
        else
            return view('dashboard.admin.login');
    }

    public function login(LoginRequest $request)
    {
        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('show_admin');
        }
        return back()->withErrors('Tài khoản hoặc mật khẩu không đúng')->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin_show_login'));
    }
}
