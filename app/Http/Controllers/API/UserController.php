<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * List User
     * Display a listing of the user.
     * @group User endpoints
     *
     * @response {
     * "current_page": 1,
     * data: [{
     *   'id': 1,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     *  {
     *   "id": 2,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   }
     * ],
     * ,
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/users?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/users?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/users",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": 2,
     *   "total": 2
     * }
     */
    public function index()
    {
        $users = User::paginate(10);
        return response()->json($users);
    }

    /**
     * Create a User
     * Store a newly created user in database.
     * @group User endpoints
     *
     * @bodyParam int $role_id required
     * @bodyParam string first_name required
     * @bodyParam string last_name required
     * @bodyParam date dob required
     * @bodyParam string phone required
     * @bodyParam string email required
     * @bodyParam timestamp email_verified_at required
     * @bodyParam string  password required
     * @bodyParam string address required
     * @bodyParam string bio 
     * @bodyParam string social_linkedin 
     * @bodyParam string social_facebook 
     * @bodyParam  int  $id required
     * @response {
     *   'id': 1,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function store(Request $request)
    {
        $user = User::create([
            'role_id' => $request->role_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
            'address' => $request->address,
            'bio' => $request->bio,
            'social_linkedin' => $request->social_linkedin,
            'social_facebook' => $request->social_facebook
        ]);
        return response()->json($user);
    }

    /**
     * Find a User
     * Display the specified user.
     * @group User endpoints
     *
     * @bodyParam  int  $id required
     * @response {
     *   'id': 1,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Update User's Information
     * Update the specified user in database.
     * @group User endpoints
     *
     * @bodyParam int $role_id required
     * @bodyParam string first_name required
     * @bodyParam string last_name required
     * @bodyParam date dob required
     * @bodyParam string phone required
     * @bodyParam string email required
     * @bodyParam timestamp email_verified_at required
     * @bodyParam string  password required
     * @bodyParam string address required
     * @bodyParam string bio 
     * @bodyParam string social_linkedin 
     * @bodyParam string social_facebook 
     * @bodyParam  int  $id required
     * @response {
     *   'id': 1,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->toQuery()->update([
                'role_id' => $request->role_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'password' => $request->password,
                'address' => $request->address,
                'bio' => $request->bio,
                'social_linkedin' => $request->social_linkedin,
                'social_facebook' => $request->social_facebook
            ]);
        }
        return response()->json($user);
    }

    /**
     * Remove a User
     * Remove the specified user from database.
     * @group User endpoints
     *
     * @bodyParam  int  $id required
     * @response {
     *   'id': 1,
     *   'role_id': 1,
     *   'first_name': 'string',
     *   'last_name': 'string',
     *   'dob': '1990-12-12',
     *   'phone': '098 0983 092',
     *   'email': 'string',
     *   'email_verified_at': '1990-12-12 12:45:10',
     *   'password': 'string',
     *   'address': 'string',
     *   'bio': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(User::findOrFail($id)->delete());
    }
}
