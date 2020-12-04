<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Organization;

class OrganizationController extends Controller
{
    /**
     * List Organization
     * Display a listing of the Organization.
     * @group Organization
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
     * @group Organization
     * 
     * @bodyParam  int $owner_id required
     * @bodyParam  string org_name required
     * @bodyParam  string phones required
     * @bodyParam  string description required
     * @bodyParam  string tax_id required
     * @bodyParam  string address required
     * @bodyParam  int  is_verify
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
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function store(Request $request)
    {
        $organization = Organization::create([
            "org_name" => $request->org_name,
            "phones" => $request->phones,
            "description" => $request->description,
            "tax_id" => $request->tax_id,
            "address" => $request->address
        ]);
        return response()->json($organization);
    }

    /**
     * Find an Organization
     * Display the specified resource.
     * @group Organization
     * @bodyParam  int  $id required
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
     * @group Organization
     * 
     * @bodyParam  int $id required
     * @bodyParam  int $owner_id required
     * @bodyParam  string org_name required
     * @bodyParam  string phones required
     * @bodyParam  string description required
     * @bodyParam  string tax_id required
     * @bodyParam  string address required
     * @bodyParam  int  is_verify
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
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(Request $request, $id)
    {
        $organization = Organization::findOrFail($id);
        if ($organization) {
            $organization->toQuery()->update([
                "owner_id" => $request->owner_id,
                "org_name" => $request->org_name,
                "phones" => $request->phones,
                "description" => $request->description,
                "tax_id" => $request->tax_id,
                "address" => $request->address
            ]);
        }
        return response()->json($organization);
    }

    /**
     * Remove an Organization
     * Remove the Organization from Database.
     * @group Organization
     * @bodyParam  int  $id required
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
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(Organization::findOrFail($id)->delete());
    }
}
