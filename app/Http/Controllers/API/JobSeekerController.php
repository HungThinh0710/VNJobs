<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\JobSeeker;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    /**
     * List JobSeeker
     * Display a listing of the job-seeker.
     * @group JobSeeker
     *
     * @response {
     *   "current_page": 1,
     *   "data": [{
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     *   }, {
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     *   }],
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/job-seekers?page=1",
     *   "from": null,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/job-seekers?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/job-seekers",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": null,
     *   "total": 0
     * }
     */
    public function index()
    {
        $jobSeekers = JobSeeker::paginate(10);
        return response()->json($jobSeekers);
    }

    /**
     * Create a JobSeeker
     * Store a newly created job-seeker in database.
     * @group JobSeeker
     *
     * @bodyParam  int  $rn_id
     * @bodyParam  int  $user_id
     * @bodyParam  int  is_elect
     * @bodyParam  string  cv_path
     * @bodyParam  string  cover_letter_path
     * @bodyParam  int  exp_years
     * @response {
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function store(Request $request)
    {
        $jobSeeker = JobSeeker::create([
            'rn_id' => $request->rn_id,
            'user_id' => $request->user_id,
            'is_elect' => $request->is_elect,
            'cv_path' => $request->cv_path,
            'cover_letter_path' => $request->cover_letter_path,
            'exp_years' => $request->exp_years
        ]);
        return response()->json($jobSeeker);
    }

    /**
     * Find a JobSeeker
     * Display the specified job-seeker.
     * @group JobSeeker
     *
     * @bodyParam  int  $id required
     * @response {
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function show($id)
    {
        return response()->json(JobSeeker::findOrFail($id));
    }

    /**
     * Update a JobSeeker
     * Update the specified job-seeker in database.
     * @group JobSeeker
     *
     * @bodyParam  int  $rn_id
     * @bodyParam  int  $user_id
     * @bodyParam  int  is_elect
     * @bodyParam  string  cv_path
     * @bodyParam  string  cover_letter_path
     * @bodyParam  int  exp_years
     * @bodyParam  int  $id required
     * @response {
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function update(Request $request, $id)
    {
        $jobSeeker = JobSeeker::findOrFail($id);
        if ($jobSeeker) {
            $jobSeeker->toQuery()->update([
                'rn_id' => $request->rn_id,
                'user_id' => $request->user_id,
                'is_elect' => $request->is_elect,
                'cv_path' => $request->cv_path,
                'cover_letter_path' => $request->cover_letter_path,
                'exp_years' => $request->exp_years
            ]);
        }
        return response()->json($jobSeeker);
    }

    /**
     * Remove a JobSeeker
     * Remove the specified job-seeker from database.
     * @group JobSeeker
     *
     * @bodyParam  int  $id required
     * @rresponse {
     *      'rn_id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function destroy($id)
    {
        return response()->json(JobSeeker::findOrFail($id)->delete());
    }
}
