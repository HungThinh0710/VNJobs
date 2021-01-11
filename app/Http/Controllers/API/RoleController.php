<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\StoreRole;


/**
 * @group Role endpoints
 *
 * APIs for role.
 */
class RoleController extends Controller
{
    /**
     * List Role
     * Display a listing of the role.
     * @group Role endpoints
     * 
     * @response {
     * "current_page": 1,
     * data: [{
     *   "id": 1,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   },
     *  {
     *   "id": 2,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     *   }
     * ],
     * ,
     *   "first_page_url": "http://127.0.0.1:8000/api/v1/roles?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/v1/roles?page=1",
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/v1/roles",
     *   "per_page": 10,
     *   "prev_page_url": null,
     *   "to": 2,
     *   "total": 2
     * }
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return response()->json($roles);
    }

    /**
     * Create a Role
     * Store a newly created role in database.
     * @group Role endpoints
     * 
     * @response {
     *   "id": 2,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function store(StoreRole $request)
    {
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    /**
     * Find a Role
     * Display the specified role.
     * @group Role endpoints
     * 
     * @bodyParam int id required The id of the role.
     * @response {
     *   "id": 2,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    /**
     * Update Role's Information
     * Update the specified role in database.
     * @group Role endpoints
     * 
     * @response {
     *   "id": 2,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function update(StoreRole $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return response()->json($role);
    }

    /**
     * Remove a Role
     * Remove the specified role from database.
     * @group Role endpoints
     * 
     * @bodyParam int id required The id of the role.
     * @response {
     *   "id": 2,
     *   "role_name": "string",
     *   "created_at": "1990-12-12 12:45:10",
     *   "updated_at": "1990-12-12 12:45:10"
     * }
     */
    public function destroy($id)
    {
        return response()->json(Role::findOrFail($id)->delete());
    }
}
