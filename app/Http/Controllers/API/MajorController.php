<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Major;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMajor;

/**
 * @group Major endpoints
 *
 * APIs for Major.
 */
class MajorController extends Controller
{
    /**
     * List Major
     * Display a listing of the resource.
     * @group Major endpoints
     *
     * @response {
     * "current_page": 1,
     * data: [{
     *   "id": 1,
     *   "major_name": "string",
     *   "image_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     *  {
     *   "id": 1,
     *   "major_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   }
     * ],
     * ,
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/majors?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/majors?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/majors",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": 10,
     *   "total": 2
     * }
     */
    public function index()
    {
        $majors = Major::withCount(['recruitment_news as job_left' => function($q){
            $q->whereDate('end_time', '>', Carbon::today()->toDateString());
        }])->get();

        return response()->json(['data' => $majors]);
    }

    /**
     * Create Major
     * Store a newly created major in database.
     * @group Major endpoints
     *
     * @response {
     *   "id": 1,
     *   "major_name": "string",
     *   "image_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function store(StoreMajor $request)
    {
        $major = Major::create($request->all());
        return response()->json($major);
    }

    /**
     * Find a Major
     * Display the specified major.
     * @group Major endpoints
     *
     * @bodyParam int id required The id of the major.
     * @response {
     *   "id": 1,
     *   "major_name": "string",
     *   "image_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function show($id)
    {
        $major = Major::findOrFail($id);
        return response()->json($major);
    }

    /**
     * Update Major's Information
     * Update the specified major in database.
     * @group Major endpoints
     *
     * @response {
     *   "id": 1,
     *   "major_name": "string",
     *   "image_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(StoreMajor $request, $id)
    {
        $major = Major::findOrFail($id);
        $major->update($request->all());
        return response()->json($major);
    }

    /**
     * Remove a Major
     * Remove the specified major from database.
     * @group Major endpoints
     *
     * @bodyParam int id required The id of the major.
     * @response {
     *   "id": 1,
     *   "major_name": "string",
     *   "image_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(Major::findOrFail($id)->delete());
    }

    public function count() {
        $count = Major::count();
        return response()->json(['count' => $count]);
    }
}
