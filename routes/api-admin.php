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
    Route::post('login', 'APIAdmin\\AuthenticateController@login');
    Route::post('register', 'APIAdmin\\AuthenticateController@register');

    Route::group([
//        'prefix' => 'auth',
        'middleware' => ['auth:api-admins', 'scope:admin']
    ], function(){
        Route::post('/token', 'APIAdmin\\AuthenticateController@token');
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
