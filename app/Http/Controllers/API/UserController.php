<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use App\JobSeeker;
use Illuminate\Http\Request;
use App\Http\Requests\FindUser;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UpdateUserFormRequest;

/**
 * @group User endpoints
 *
 * APIs for user.
 */
class UserController extends Controller
{
    /**
     * Get User
     * Display data of user by id
     * @authenticated
     * @group User endpoints
     *
     */
    public function index(Request $request)
    {
        $users = User::findOrFail($request->user()->id);
        return response()->json($users);
    }

    /**
    * Create a User
    * Store a newly created user in database.
    * @authenticated
    * @group User endpoints
    *
    * @response 201{
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
    *   'avatar_path': 'string',
    *   'social_linkedin': 'string',
    *   'social_facebook': 'string',
    *   "created_at": "1990-12-12 12:45:10",
    *   "updated_at": "1990-12-12 12:45:10"
    * }
    */
    public function store(StoreUser $request)
    {
        // $user = User::create([
        //     'role_id' => $request->role_id,
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'dob' => $request->dob,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'email_verified_at' => $request->email_verified_at,
        //     'password' => $request->password,
        //     'address' => $request->address,
        //     'bio' => $request->bio,
        //     'avatar_path' => $request->avatar_path,
        //     'social_linkedin' => $request->social_linkedin,
        //     'social_facebook' => $request->social_facebook
        // ]);

        $request->merge([
            'password' => Hash::make($request->input('password'))
        ]);

        $user = new User($request->all());
        $user->role_id = 4; //default role for new user;
        $user->save();
        return response()->json($user, 201);
    }

    /**
     * Find a User
     * Display the specified user.
     * @authenticated
     * @group User endpoints
     *
     * @bodyParam id int required The id of the user.
     *
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
     *   'avatar_path': 'string',
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
     * @authenticated
     * @group User endpoints
     * @bodyParam id int required The id of the user.
     * @bodyParam id2 int required The id of the user.
     *
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
     *   'avatar_path': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(UpdateUserFormRequest $request)
    {


        $user = User::findOrFail($request->user()->id);
        $user->update($request->all());
        return response()->json(['message' => 'Cập nhật hồ sơ thành công!', 'user' => $user]);
    }

    /**
     * Remove a User
     * Remove the specified user from database.
     * @authenticated
     * @group User endpoints
     *
     * @bodyParam id int required The id of the user.
     *
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
     *   'avatar_path': 'string',
     *   'social_linkedin': 'string',
     *   'social_facebook': 'string',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return response()->json($user);
    }


    public function apply(Request $request) {
        $rnId = $request->rn_id;
        $userId = $request->user()->id;
        $user = User::findOrFail($userId);
        // dd($request);
        $exists = $user->applied_jobs()->where('rn_id', $rnId)->exists();
        if ($exists) {
            return response()->json(['data' => $user], 201);
        }
        $user->applied_jobs()->attach($rnId, [
            'is_elect' => 0,
            'cv_path' => $request->cv_path,
            'cover_letter_path' => $request->cover_letter_path,
            'exp_years' => $request->exp_years
        ]);
        $user->save();
        return response()->json(['data' => $user], 200);
    }

    /**
     * Applied Jobs
     * View list applied jobs for that user.
     * @authenticated
     * @group User endpoints
     *
     * @response {
     *   "id": 1,
     *   "rn_id": 1,
     *   "user_id": 1,
     *   "is_elect": 1,
     *   "cv_path": "cv_path_tmp",
     *   "cover_letter_path": "cover_letter_path_tmp",
     *   "exp_years": 1,
     *   "created_at": null,
     *   "updated_at": null,
     *   "recruitment_news": {
     *       "id": 1,
     *       "org_id": 1,
     *       "author_id": 8,
     *       "major_id": 2,
     *       "title": "Part-time Java",
     *       "content": "Cần tuyển Aut ea nihil amet est. Impedit totam qui ipsam veniam.earum.",
     *       "address": "571 Phố Bồ Ánh Tú, Phường 6, Huyện Phượng Trung\nTây Ninh",
     *       "city": "Hồ Chí Minh",
     *       "work_type": "Remote",
     *       "start_time": "2021-05-18 03:47:00",
     *       "end_time": "2021-05-23 03:47:00",
     *       "interview_start_time": "2021-05-24 03:47:00",
     *       "interview_end_time": "2021-05-28 03:47:00",
     *       "created_at": "2021-05-18 03:47:00",
     *       "updated_at": "2021-05-18 03:47:00"
     *   }
     * }
     */
    public function applied(Request $request) {

        $listApplied = JobSeeker::with('recruitment_news')->where("user_id", $request->user()->id)->get();
        return response()->json($listApplied);
    }
}
