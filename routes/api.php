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
        Route::post('register', 'API\UserController@store');

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

    // Roles Publics
    Route::get('roles/', 'API\RoleController@index');
    Route::get('roles/{id}', 'API\RoleController@show');

    // Recruitment News Publics
    Route::get('recruitment-news/', 'API\RecruitmentNewsController@index');
    Route::get('recruitment-news/{id}', 'API\RecruitmentNewsController@show');

    Route::group(['middleware' => 'auth:api'], function() {
        //Check is token still valid
        Route::post('/is-valid-token', 'API\AuthenticateController@checkValidToken');

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

        // Roles Group Auth
        Route::group(['prefix' => 'roles'], function() {
            Route::post('/', 'API\RoleController@store');
            Route::put('/{id}', 'API\RoleController@update');
            Route::delete('/{id}', 'API\RoleController@destroy');
        });

        // Users Group Auth
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', 'API\UserController@index');
            Route::get('/{id}', 'API\UserController@show');
            Route::put('/', 'API\UserController@update');
            Route::delete('/{id}', 'API\UserController@destroy');
        });

        // Recruitment News Group Auth
        Route::group(['prefix' => 'recruitment-news'], function() {
            Route::post('/', 'API\RecruitmentNewsController@store');
            Route::put('/{id}', 'API\RecruitmentNewsController@update');
            Route::delete('/{id}', 'API\RecruitmentNewsController@destroy');
        });
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
