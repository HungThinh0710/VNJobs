<?php

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

/*|---- API prefix: domain/api/admin -----| */
Route::group(['prefix' => 'v1'], function(){
    Route::group(['prefix' => 'auth'], function(){
        Route::post('login', 'APIAdmin\\AuthenticateController@login');
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
    Route::get('recruitment-news/{id}', 'API\RecruitmentNewsController@show');
    Route::post('search', 'API\RecruitmentNewsController@search');

    Route::group(['middleware' => ['auth.api-admins', 'scope:admin']], function(){
        Route::post('/token', 'APIAdmin\\AuthenticateController@token');
        Route::get('/statistic', 'APIAdmin\\StatisticController@allStatistic');

        //Org Group
        Route::get('/organization', 'APIAdmin\\OrganizationController@showOrg');

        // JobSeekers Group Auth
        Route::group(['prefix' => 'job-seekers'], function() {
            Route::put('/{id}', 'API\JobSeekerController@update');
            Route::delete('/{id}', 'API\JobSeekerController@destroy');
        });

        // Majors Group Auth
        Route::group(['prefix' => 'majors'], function() {
            Route::post('/', 'API\MajorController@store');
            Route::put('/{id}', 'API\MajorController@update');
            Route::delete('/{id}', 'API\MajorController@destroy');
        });

        // Users Group Auth
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', 'API\UserController@index');
            Route::get('/find/{id}', 'API\UserController@show');
            Route::put('/', 'API\UserController@update');
            Route::delete('/{id}', 'API\UserController@destroy');
        });

        // Recruitment News Group Auth
        Route::group(['prefix' => 'recruitment-news'], function() {
            Route::post('/', 'API\RecruitmentNewsController@store');
            Route::put('/{id}', 'API\RecruitmentNewsController@update');
            Route::delete('/{id}', 'API\RecruitmentNewsController@destroy');
        });

        //Logout
        Route::post('/logout', 'APIAdmin\\AuthenticateController@logout');
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
