<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\RegisterUserFormRequest;
use App\User;
//use Cookie;
use Illuminate\Support\Facades\Cookie;

/**
 * @group Auth endpoints
 *
 * APIs for authentication user.
 */

class AuthenticateController extends Controller
{


    /**
     * Login.
     * @group Auth endpoints
     * @bodyParam email String required
     * @bodyParam password String required
     */
    public function login(AuthenticateRequest $request){
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Email or password are wrong! Please try again.'
            ], 401);

        config(['auth.guards.api.provider' => 'users']);
        $token = Auth::user()->createToken('User Access Token',['user']);
        $cookie = $this->getCookieDetails($token->accessToken);

        return response()->json([
            'user' => Auth::user(),
            'access_token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ])->cookie($cookie['name'], $cookie['value'], $cookie['minutes'], $cookie['path'], $cookie['domain'], $cookie['secure'], $cookie['httponly'], $cookie['samesite']);
    }

    /**
     * Check valid token.
     * @group Auth endpoints
     */
    public function checkValidToken(Request $request)
    {
        return response()->json(['status' => 'OK', 'message' => 'Token is valid'], 200);
    }

    private function getCookieDetails($token)
    {
        return [
            'name' => '_token',
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

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $cookie = Cookie::forget('_token');
        return response()->json([
            'message' => 'Logout successfully'
        ])->withCookie($cookie);
    }
}
