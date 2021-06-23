<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Organization;
use App\User;
use App\Http\Requests\Organization\StoreOrganization;
use App\Http\Requests\Organization\AddMember;

/**
 * @group Organization endpoints
 *
 * APIs for Organization.
 */
class OrganizationController extends Controller
{
    /**
     * List Organization
     * Display a listing of the Organization.
     * @group Organization endpoints
     *
     * @response {
     * "current_page": 1,
     * data: [{
     *   "id": 1,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     *  {
     *   "id": 2,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     * ],
     * ,
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/organizations",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": 10,
     *   "total": 2
     * }
     */
    public function index()
    {
        $organization = Organization::paginate(10);
        return response()->json($organization);
    }

    /**
     * Create Organization
     * Store a newly created resource in Database.
     * @authenticated
     * @group Organization endpoints
     *
     * @response {
     *   "id": 1,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function store(StoreOrganization $request)
    {
        $organization = new Organization;
        $organization->is_verify = 0;
        $organization->phones = $request->phones;
        $organization->description = $request->description;
        $organization->tax_id = $request->tax_id;
        $organization->address = $request->address;
        $organization->org_name = $request->org_name;
        $organization->logo_path = $request->logo_path;
        $organization->cover_path = $request->cover_path;
        $organization->owner_id = $request->user()->id;
        $organization->save();
        return response()->json($organization);
        // $organization = Organization::create($organization);
        // return response()->json($organization);
    }

    /**
     * Find an Organization
     * Display the specified resource.
     * @group Organization endpoints
     *
     * @bodyParam int id required The id of the organization.
     *
     * @response {
     *   "id": 1,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function show(int $id)
    {
        $organization = Organization::findOrFail($id);
        return response()->json($organization);
    }

    /**
     * Update an Organization
     * Update the specified resource in Database.
     * @authenticated
     * @group Organization endpoints
     *
     * @response {
     *   "id": 1,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(StoreOrganization $request, $id)
    {
        $organization = Organization::findOrFail($id);
        $organization->update($request->all());
        return response()->json($organization);
    }

    /**
     * Remove an Organization
     * Remove the Organization from Database.
     * @authenticated
     * @group Organization endpoints
     *
     * @bodyParam int id required The id of the organization.
     *
     * @response {
     *   "id": 1,
     *   "owner_id": 1,
     *   "org_name": "Công ty Vi Inc",
     *   "phones": "+84-165-015-8016",
     *   "description": "string",
     *   "tax_id": "41665",
     *   "address": "string",
     *   "is_verify": 0,
     *   "logo_path": "string",
     *   "cover_path": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(Organization::findOrFail($id)->delete());
    }

    /**
     * Show all members of Organization
     * Show all membership of Organization with each role.
     * @authenticated
     * @group Organization endpoints
     *
     * @queryParam org_id int required id of Organization.
     *
     * @response {
     *    "id": 3,
     *    "owner_id": 1,
     *    "org_name": "Công ty Khoa PLC",
     *    "phones": "053-385-3690",
     *    "description": null,
     *    "tax_id": "63021",
     *    "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
     *    "logo_path": "public/docs/logo.png",
     *    "cover_path": "public/docs/logo.png",
     *    "is_verify": 0,
     *    "created_at": "2021-06-12 05:55:18",
     *    "updated_at": "2021-06-12 05:55:18",
     *    "users": [
     *      {
     *            "id": 3,
     *            "first_name": "Cô. Phạm Thái Oanh",
     *            "last_name": "Phạm Toàn",
     *            "dob": "1970-01-01",
     *            "phone": "+84-74-764-7269",
     *            "email": "doan.lam@example.com",
     *            "email_verified_at": "2021-06-12 05:55:18",
     *            "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
     *            "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
     *            "avatar_path": "public/docs/user.png",
     *            "social_linkedin": null,
     *            "social_facebook": null,
     *            "created_at": "2021-06-12 05:55:18",
     *            "updated_at": "2021-06-12 05:55:18",
     *            "pivot": {
     *                "org_id": 3,
     *                "user_id": 3
     *            },
     *            "roles": [
     *                {
     *                    "id": 3,
     *                    "role_name": "ContentWriter",
     *                    "created_at": null,
     *                    "updated_at": null,
     *                    "pivot": {
     *                        "user_id": 3,
     *                        "role_id": 3,
     *                        "org_id": 3
     *                     }
     *                 }
     *            ]
     *       }
     *   ]
     *
     * }
     */
    public function showMembership(Request $request)
    {
        $orgId = $request->input('org_id');

        $org = Organization::with(['users', 'users.roles' => function($q) use ($orgId){
            return $q->wherePivot('org_id', $orgId);
        }])->findOrFail($orgId);

        return response()->json($org);
    }

    /**
     * Add member to Organization
     * Add member to Organization with each role.
     * @authenticated
     * @group Organization endpoints
     *
     * @response {
     *   "message": "Add member to your organization successfully",
     *   "org": {
     *      "id": 3,
     *      "owner_id": 1,
     *      "org_name": "Công ty Khoa PLC",
     *      "phones": "053-385-3690",
     *      "description": null,
     *      "tax_id": "63021",
     *      "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
     *      "logo_path": "public/docs/logo.png",
     *      "cover_path": "public/docs/logo.png",
     *      "is_verify": 0,
     *      "created_at": "2021-06-12 05:55:18",
     *      "updated_at": "2021-06-12 05:55:18",
     *      "users": [
     *      {
     *          "id": 3,
     *          "first_name": "Cô. Phạm Thái Oanh",
     *          "last_name": "Phạm Toàn",
     *          "dob": "1970-01-01",
     *          "phone": "+84-74-764-7269",
     *          "email": "doan.lam@example.com",
     *          "email_verified_at": "2021-06-12 05:55:18",
     *          "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
     *          "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
     *          "avatar_path": "public/docs/user.png",
     *          "social_linkedin": null,
     *          "social_facebook": null,
     *          "created_at": "2021-06-12 05:55:18",
     *          "updated_at": "2021-06-12 05:55:18",
     *          "pivot": {
     *              "org_id": 3,
     *              "user_id": 3,
     *              "role_id": 3
     *          },
     *          "roles": [
     *              {
     *                  "id": 3,
     *                  "role_name": "ContentWriter",
     *                  "created_at": null,
     *                  "updated_at": null,
     *                  "pivot": {
     *                      "user_id": 3,
     *                      "role_id": 3,
     *                      "org_id": 3
     *                  }
     *              }
     *          ]
     *      },
     * }
     */
    public function addMembership(AddMember $request)
    {
        //Initialize request param
        $orgId = $request->input('org_id');
        $userId = $request->input('user_id');

        $user = User::find($userId);
        if(!$user){
            return response()->json(["message"=>"User not found"], 404);
        }

        $org = Organization::with(['users', 'users.roles' => function($q) use ($orgId){
            return $q->wherePivot('org_id', $orgId);
        }])->findOrFail($orgId);
        $usersAlreadyInOrgArr = $org->users->pluck(['id'])->toArray(); //get only [id] field already exist in collection to array
        $isAlreadyExist = array_search($userId, $usersAlreadyInOrgArr); //return false if it's not exist. | return index of array if it's exist
        if($isAlreadyExist !== false){
            return response()->json(["message" => "This user already in your organization"], 422);
        }
        //Attach many-to-many field relationship
        $org->users()->attach($orgId, [
            'role_id' => $request->input('role_id'),
            'user_id' => $userId
        ]);
        //Re query org for return
        $org->with(['users.roles' => function($q) use ($orgId){
            return $q->wherePivot('org_id', $orgId);
        }])->get();
        return response()->json(['message' => 'Add member to your organization successfully', 'org' => $org]);
    }

    public function count() {
        $count = Organization::count();
        $listVerified = Organization::where('is_verify', 1)->get();
        $countVerified = $listVerified->count();
        return response()->json(['count' => $count, 'data' => $listVerified, 'count_verify' => $countVerified]);
    }
}
