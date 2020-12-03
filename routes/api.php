<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function(){
    Route::group(['prefix' => 'auth'], function(){
        Route::post('login', 'API\AuthenticateController@login');
    });

    Route::group(['prefix' => 'organization'], function() {
        Route::get('/', 'API\OrganizationController@index');
        Route::get('/{id}', 'API\OrganizationController@show');
        Route::post('/', 'API\OrganizationController@store');
        Route::put('/{id}', 'API\OrganizationController@update');
        Route::delete('/{id}', 'API\OrganizationController@destroy');
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:api'], function() {
    
});