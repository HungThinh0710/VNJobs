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

    Route::group(['middleware' => ['auth:api-admins', 'scope:admin']], function(){
        Route::post('/token', 'APIAdmin\\AuthenticateController@token');
        Route::get('/statistic', 'APIAdmin\\StatisticController@allStatistic');
        Route::get('/organization', 'APIAdmin\\OrganizationController@showOrg');
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
