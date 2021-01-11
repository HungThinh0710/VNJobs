<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Organization;
use App\Http\Requests\StoreOrganization;

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
        $organization = Organization::create($request->all());
        return response()->json($organization);
    }

    /**
     * Find an Organization
     * Display the specified resource.
     * @group Organization endpoints
     * 
     * @bodyParam int id required
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
     * @group Organization endpoints
     * 
     * @bodyParam int id required
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
}
