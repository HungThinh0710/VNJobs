<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\RegisterUserFormRequest;
use App\User;

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

        $token = Auth::user()->createToken('authToken');

        return response()->json([
            'user' => Auth::user(),
            'access_token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ]);
    }

    /**
     * Check valid token.
     * @group Auth endpoints
     */
    public function checkValidToken(Request $request)
    {
        return response()->json(['status' => 'OK', 'message' => 'Token is valid'], 200);
    }
}
