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

    // Organizations Publics
    Route::get('organizations/', 'API\OrganizationController@index');
    Route::get('organizations/{id}', 'API\OrganizationController@show');
    
    // Majors Publics
    Route::get('majors/', 'API\MajorController@index');
    Route::get('majors/{id}', 'API\MajorController@show');

    // JobSeekers Publics
    Route::get('job-seekers/', 'API\JobSeekerController@index');
    Route::get('job-seekers/{id}', 'API\JobSeekerController@show');
    
    Route::group(['middleware' => 'auth:api'], function() {
        // Organizations Group Auth
        Route::group(['prefix' => 'organizations'], function() {
            Route::post('/', 'API\OrganizationController@store');
            Route::put('/{id}', 'API\OrganizationController@update');
            Route::delete('/{id}', 'API\OrganizationController@destroy');
        });

        // Majors Group Auth
        Route::group(['prefix' => 'majors'], function() {
            Route::post('/', 'API\MajorController@store');
            Route::put('/{id}', 'API\MajorController@update');
            Route::delete('/{id}', 'API\MajorController@destroy');
        });

        // JobSeekers Group Auth
        Route::group(['prefix' => 'job-seekers'], function() {
            Route::post('/', 'API\JobSeekerController@store');
            Route::put('/{id}', 'API\JobSeekerController@update');
            Route::delete('/{id}', 'API\JobSeekerController@destroy');
        });
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
