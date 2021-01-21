<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'TestController@show');

Auth::routes();

Route::get('/admincp/login', 'Dashboard\\Admin\\AuthenticateController@showLogin')->name('admin_show_login');
Route::post('admincp/login', 'Dashboard\\Admin\\AuthenticateController@login')->name('admin_login');

Route::group(['prefix' => 'admincp', 'middleware' => 'auth:admin'], function () {
    Route::get('/home', 'Dashboard\\Admin\\HomeController@showIndex')->name('show_admin');
    Route::get('/home', 'Dashboard\\Admin\\HomeController@showIndex')->name('show_admin');

    //Logout
    Route::get('logout', 'Dashboard\\Admin\\AuthenticateController@logout')->name('admin_logout');;

    /*
     * List Org
     */
    Route::get('list-org', 'Dashboard\\Admin\\OrgController@showListOrg')->name('show_admin_list_org');


});
