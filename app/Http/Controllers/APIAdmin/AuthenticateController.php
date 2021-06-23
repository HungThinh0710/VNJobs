<?php

namespace App\Http\Controllers\APIAdmin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticateRequest;
use App\Admin;
use Illuminate\Support\Facades\Cookie;


/**
 * @group Admin Authenticate
 *
 * APIs for authentication admin.
 */
class AuthenticateController extends Controller
{
    /**
     * Login.
     * @group Admin Authenticate
     * @bodyParam email String required
     * @bodyParam password String required
     */
    public function login(AuthenticateRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(!Auth::guard('admin')->attempt($credentials))
            return response()->json([
                'message' => 'Email or password are wrong! Please try again.'
            ], 401);

        $token = Auth::guard('admin')->user()->createToken('Admin Access Token',['admin']);
        $cookie = $this->getCookieDetails($token->accessToken);

        return response()->json([
            'user' => Auth::guard('admin')->user(),
            'access_token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ])->cookie($cookie['name'], $cookie['value'], $cookie['minutes'], $cookie['path'], $cookie['domain'], $cookie['secure'], $cookie['httponly'], $cookie['samesite']);
    }

    private function getCookieDetails($token)
    {
        return [
            'name' => 'admin_token',
            'value' => $token,
            'minutes' => 525948,
            'path' => null,
            'domain' => null,
             'secure' => true, // for production
//            'secure' => null, // for localhost
            'httponly' => true,
            'samesite' => true,
        ];
    }

    /**
     * Check valid token
     * Check valid token for admin account
     * @authenticated
     * @group Admin Authenticate
     *
     */
    public function token(Request $request)
    {
        return response()->json(['status' => 'OK', 'message' => 'Token for admin is valid'], 200);
    }

    /**
     * Logout
     * Logout admin account
     * @authenticated
     * @group Admin Authenticate
     *
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $cookie = Cookie::forget('admin_token');
        return response()->json([
            'message' => 'Logout admin successfully'
        ])->withCookie($cookie);
    }
}
