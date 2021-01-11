<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\JobSeeker;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobSeeker;

/**
 * @group JobSeeker endpoints
 *
 * APIs for Jobseeker.
 */
class JobSeekerController extends Controller
{
    /**
     * List JobSeeker
     * Display a listing of the job-seeker.
     * @group JobSeeker endpoints
     *
     * @response {
     *   "current_page": 1,
     *   "data": [{
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     *   }, {
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
     * @group JobSeeker endpoints
     *
     * @response {
     *      'id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function store(StoreJobSeeker $request)
    {
        $jobSeeker = JobSeeker::create($request->all());
        return response()->json($jobSeeker, 201);
    }

    /**
     * Find a JobSeeker
     * Display the specified job-seeker.
     * @group JobSeeker endpoints
     *
     * @bodyParam int id required The id of the job seeker.
     * @response {
     *      'id': 1,
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
        $jobSeeker = JobSeeker::findOrFail($id);
        return response()->json($jobSeeker);
    }

    /**
     * Update a JobSeeker
     * Update the specified job-seeker in database.
     * @group JobSeeker endpoints
     * 
     * @response {
     *      'id': 1,
     *      'user_id': 1,
     *      'is_elect': 0,
     *      'cv_path': "string",
     *      'cover_letter_path': "string",
     *      'cover_letter_path': "string",
     *      'exp_years': 0,
     * }
     */
    public function update(StoreJobSeeker $request, $id)
    {
        $jobSeeker = JobSeeker::findOrFail($id);
        $jobSeeker->update($request->all());
        return response()->json($jobSeeker);
    }

    /**
     * Remove a JobSeeker
     * Remove the specified job-seeker from database.
     * @group JobSeeker endpoints
     *
     * @bodyParam int id required
     * @rresponse {
     *      'id': 1,
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
        $jobSeeker = JobSeeker::findOrFail($id)->delete();
        return response()->json($jobSeeker);
    }
}
