<?php

namespace App\Http\Controllers\APIAdmin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticateRequest;
use App\Admin;


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

        return response()->json([
            'user' => Auth::guard('admin')->user(),
            'access_token' => $token->accessToken,
            'expires_at' => Carbon::parse($token->token->expires_at)->toDateTimeString()
        ]);
    }

    public function token(Request $request)
    {
        return response()->json(['status' => 'OK', 'message' => 'Token admin is valid'], 200);
    }
}
