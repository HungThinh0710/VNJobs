<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Major;
use App\RecruitmentNews;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecruitmentNews;

/**
 * @group Recruitment News endpoints
 *
 * APIs for Recruitment News.
 */
class RecruitmentNewsController extends Controller
{

    /**
     * List Recruitment News
     * Display a listing of the recruitment news.
     * @group Recruitment News endpoints
     *
     * @response {
     * "current_page": 1,
     * data: [{
     *   'id': 1,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'content': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'end_time': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     *  {
     *   "id": 2,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'content': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'address': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   }
     * ],
     * ,
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/recruitment-news",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": 2,
     *   "total": 2
     * }
     */
    public function index()
    {
        $listRecruitmentNews = RecruitmentNews::with('major')->paginate(10);
        return response()->json($listRecruitmentNews);
    }

    public function showByMajor()
    {
        $listRecruitmentNewsByMajor = Major::with(['recruitment_news' => function($q){
           $q->whereDate('end_time', '>', Carbon::today()->toDateString())->with('org')->latest()->limit(10);
        }])->get();


        return response()->json($listRecruitmentNewsByMajor);
    }

    /**
    * Create a Recruitment News
    * Store a newly created recruitment news in database.
    * @group Recruitment News endpoints
    *
    * @response {
    *   'id': 1,
    *   'org_id': 1,
    *   'author_id': 1,
    *   'major_id': 1,
    *   'title': 'string',
    *   'content': 'string',
    *   'address': 'string',
    *   'city': 'string',
    *   'start_time': '1990-12-12 12:45:10',
    *   'end_time': '1990-12-12 12:45:10',
    *   'interview_start_time': '1990-12-12 12:45:10',
    *   'interview_end_time': '1990-12-12 12:45:10',
    *   "created_at": "1990-12-12 12:45:10",
    *   "updated_at": "1990-12-12 12:45:10"
    * }
    */
    public function store(StoreRecruitmentNews $request)
    {
        $recruitmentNews = RecruitmentNews::create($request->all());
        return response()->json($recruitmentNews);
    }

    /**
     * Find a Recruitment News
     * Display the specified recruitment news.
     * @group Recruitment News endpoints
     *
     * @bodyParam int id required The id of the recruiment news.
     * @response {
     *   'id': 1,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'content': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'end_time': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function show($id)
    {
        $recruitmentNews = RecruitmentNews::findOrFail($id);
        return response()->json($recruitmentNews);
    }

    /**
     * Update Recruitment News's Information
     * Update the specified recruitment news in database.
     * @group Recruitment News endpoints
     *
     * @response {
     *   'id': 1,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'content': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'end_time': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(StoreRecruitmentNews $request, $id)
    {
        $recruitmentNews = RecruitmentNews::findOrFail($id);
        $recruitmentNews->update($request->all());
        // $userId = $request->user()->id;
        // // dd($recruitmentNews->author_id);
        // // dd($userId);
        // if ($userId != $recruitmentNews->author_id) {
        //     $recruitmentNews->job_seeker()->attach($userId);
        //     dd($recruitmentNews);
        //     $recruitmentNews->save();
        // }
        return response()->json(['message' => 'Cập nhật bài viết thành công!', 'recruitmentNews' => $recruitmentNews]);
    }

    /**
     * Remove a Recruitment News
     * Remove the specified recruitment news from database.
     * @group Recruitment News endpoints
     *
     * @bodyParam  int id required The id of the recruitment news
     * @response {
     *   'id': 1,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'content': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'end_time': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(RecruitmentNews::findOrFail($id)->delete());
    }

    public function search(Request $request) {
        $params = $request->all();
        //$recruitmentNews = RecruitmentNews::filter($params);
        //dd($recruitmentNews);
        
        $recruitmentNews = RecruitmentNews::with('org', 'major')->filter($params);
            //->workType($request);
        
        return response()->json($recruitmentNews);
    }
}
