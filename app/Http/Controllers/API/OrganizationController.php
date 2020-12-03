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
     * @bodyParam  Request  $request required
     */
    public function store(Request $request)
    {
        $organization = new Organization;
        $organization->owner_id = $request->owner_id;
        $organization->org_name = $request->org_name;
        $organization->phones = $request->phones;
        $organization->description = $request->description;
        $organization->tax_id = $request->tax_id;
        $organization->address = $request->address;

        $organization->save();
        return response()->json($organization);
    }

    /**
     * Find an Organization
     * Display the specified resource.
     * @group Organization
     * @bodyParam  int  $id required
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
     * @bodyParam  Request  $request required
     * @bodyParam  int  $id required
     */
    public function update(Request $request, $id)
    {
        $organization = Organization::findOrFail($id);
        if (!$organization) 
            return response()->
        $organization->toQuery()->update([
            "owner_id" => $request->owner_id,
            "org_name" => $request->org_name,
            "phones" => $request->phones,
            "description" => $request->description,
            "tax_id" => $request->tax_id,
            "address" => $request->address
        ]);
        return response()->json($organization);
    }

    /**
     * Remove an Organization
     * Remove the Organization from Database.
     * @group Organization
     * @bodyParam  int  $id required
     */
    public function destroy($id)
    {
        return response()->json(Organization::findOrFail($id)->delete());
    }
}
