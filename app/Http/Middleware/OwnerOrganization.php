<?php

namespace App\Http\Middleware;

use Closure;
use App\Organization;

class OwnerOrganization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $org = Organization::find($request->input('org_id'));
        if(!$org){
            return response()->json(['message' => 'Organization not found'],404);
        }
        if($org->owner_id != $request->user()->id){
            return response()->json(['message' => 'You do not have permission to do with this organization'],403);
        }
        return $next($request);
    }
}
