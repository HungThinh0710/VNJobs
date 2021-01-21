<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\Admin\LoginRequest;

class AuthenticateController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credential = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::guard('admin')->attempt($credential)) {
//            return redirect()->route('');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
