<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Major;
use App\RecruitmentNews;
use App\User;
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
    * @autheticated
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
        $recruitmentNews = new RecruitmentNews;
        $recruitmentNews->author_id = $request->user()->id;
        $recruitmentNews->org_id = $request->org_id;
        $recruitmentNews->major_id = $request->major_id;
        $recruitmentNews->title = $request->title;
        $recruitmentNews->content = $request->content;
        $recruitmentNews->address = $request->address;
        $recruitmentNews->city = $request->city;
        $recruitmentNews->work_type = $request->work_type;
        $recruitmentNews->start_time = $request->start_time;
        $recruitmentNews->end_time = $request->end_time;
        $recruitmentNews->interview_start_time = $request->interview_start_time;
        $recruitmentNews->interview_end_time = $request->interview_end_time;
        $recruitmentNews->save();
        return response()->json(['message' => 'Tạo bài tuyển dụng thành công', 'recruitment_news' => $recruitmentNews]);
    }

    /**
     * Find a Recruitment News
     * Display the specified recruitment news.
     * @group Recruitment News endpoints
     *
     * @bodyParam int id required The id of the recruitment news.
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
     * Get Job seekers of recruitment news
     * Display the list of job seekers, who applied to this recruitment news by id.
     * @authenticated
     * @group Recruitment News endpoints
     *
     * @bodyParam int id required The id of the recruitment news.
     * @response {
     *   'id': 1,
     *   'org_id': 1,
     *   'author_id': 1,
     *   'major_id': 1,
     *   'title': 'string',
     *   'address': 'string',
     *   'city': 'string',
     *   'start_time': '1990-12-12 12:45:10',
     *   'end_time': '1990-12-12 12:45:10',
     *   'interview_start_time': '1990-12-12 12:45:10',
     *   'interview_end_time': '1990-12-12 12:45:10',
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10",
     *   "job_seekers": [
     *      {
     *          "id": 1,
     *          "first_name": "Uông Đăng Bắc",
     *          "last_name": "Ông. Chiêm Lam Hoán",
     *          "dob": "2015-02-26",
     *          "phone": "0186-622-0077",
     *          "email": "gia.tien@example.com",
     *          "email_verified_at": "2021-06-12 05:55:18",
     *          "address": "47 Phố Tạ Đào Ly, Phường Đổng Hà Thảo, Huyện Độ Trình\nĐà Nẵng",
     *          "bio": "SpBxrIonxjW7kOFgkgBwvS2ZQ2YcXx",
     *          "avatar_path": "public/docs/user.png",
     *          "social_linkedin": null,
     *          "social_facebook": null,
     *          "created_at": "2021-06-12 05:55:18",
     *          "updated_at": "2021-06-12 05:55:18",
     *          "pivot": {
     *          "rn_id": 1,
     *          "user_id": 1,
     *          "cv_path": "",
     *          "is_elect": 0,
     *          "cover_letter_path": "",
     *          "exp_years": 2
     *          }
     *      }
     *   ]
     * }
     */
    public function showRNWithJobSeeker(Request $request,$id)
    {
        $recruitmentNews = RecruitmentNews::with('job_seekers')->findOrFail($id)->makeHidden('content');
        $orgId = $recruitmentNews->org_id;
        $user = User::with(['roles' => function($query) use ($orgId){
            $query->wherePivot('org_id', 3);
        }])->find($request->user()->id);

        $userRoles = $user['roles'];
        //Check org membership & roles
        if(count($userRoles) === 0)
            return response()->json(['message' => 'You do not a membership of this organization'], 403);
        if($userRoles[0]->role_name != 'Founder' || $userRoles[0]->role_name != 'HR')
            return response()->json(['message' => 'You do not have permission to access job seekers'], 403);

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
