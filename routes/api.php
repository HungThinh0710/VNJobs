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
    Route::get('organizations/find-by-id/{id}', 'API\OrganizationController@show');

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
    Route::get('recruitment-news-by-major/','API\RecruitmentNewsController@showByMajor');
    Route::get('recruitment-news/{id}', 'API\RecruitmentNewsController@show');
    Route::post('search', 'API\RecruitmentNewsController@search');

    /**
     * AUTHENTICATE USER SCOPE
     */
    Route::group(['middleware' => ['auth.api', 'scope:user']], function() {
        //Check is token still valid
        Route::post('/is-valid-token', 'API\AuthenticateController@checkValidToken');

        // Organizations Group Auth
        Route::group(['prefix' => 'organizations'], function() {
            Route::post('/', 'API\OrganizationController@store');
            Route::put('/{id}', 'API\OrganizationController@update');
            Route::delete('/{id}', 'API\OrganizationController@destroy');

            Route::group(['prefix' => 'membership', 'middleware' => 'owner_org'], function (){
                Route::get('/', 'API\OrganizationController@showMembership');
                Route::post('/', 'API\OrganizationController@addMembership');
                /* BE GOING TO */
//                Route::patch('/', 'API\OrganizationController@modifyMembership');
//                Route::patch('/roles', 'API\OrganizationController@modifyMembership'); //Change roles
//                Route::delete('/', 'API\OrganizationController@deleteMembership');

            });

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
            Route::get('/find/{id}', 'API\UserController@show');
            Route::get('/applied', 'API\UserController@applied');
            Route::put('/', 'API\UserController@update');
            Route::delete('/{id}', 'API\UserController@destroy');
            Route::post('/logout', 'API\AuthenticateController@logout');
        });

        // Recruitment News Group Auth
        Route::group(['prefix' => 'recruitment-news'], function() {
            Route::post('/', 'API\RecruitmentNewsController@store');
            Route::put('/{id}', 'API\RecruitmentNewsController@update');
            Route::delete('/{id}', 'API\RecruitmentNewsController@destroy');
        });
        Route::get('recruitment-news-job-seekers/{id}', 'API\RecruitmentNewsController@showRNWithJobSeeker');

        Route::post('users/apply', 'API\UserController@apply');

    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
