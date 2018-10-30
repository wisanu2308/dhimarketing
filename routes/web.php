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

// Route::get('/', function () {
//     return view('welcome');
// });

## EXAMPLE
## Route::get("LINK", 'CONTROLLER@FUNCTION');

Route::get("/", 'MainController@index');

Route::get("login", 'MemberController@loginform');
Route::post("member/login", 'MemberController@login');
Route::get("member/profile", 'MemberController@profile');
Route::get("logout", 'MemberController@logout');

//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get("dhioffice", 'AdminController@index');
Route::get("dhioffice/manage_product", 'ManageProductController@manage_product');
Route::get("dhioffice/add_product", 'ManageProductController@add_product_view');
Route::post("dhioffice/save_product", 'ManageProductController@save_product');

Route::get("dhioffice/manage_member", 'ManageMemberController@manage_member');
Route::get("dhioffice/add_member", 'ManageMemberController@add_member_view');
Route::post("dhioffice/save_member", 'ManageMemberController@save_member');
Route::get("dhioffice/edit_member/{memberid}", 'ManageMemberController@edit_member');
Route::post("dhioffice/update_member", 'ManageMemberController@update_member');
Route::get("dhioffice/delete_member/{memberid}", 'ManageMemberController@delete_member');

Route::get("dhioffice/manage_teamgroup", 'ManageTeamGroupController@manage_teamgroup');
Route::get("dhioffice/add_teamgroup", 'ManageTeamGroupController@add_teamgroup_view');
Route::post("dhioffice/save_teamgroup", 'ManageTeamGroupController@save_teamgroup');
Route::get("dhioffice/edit_teamgroup/{teamgroupid}", 'ManageTeamGroupController@edit_teamgroup');
Route::post("dhioffice/update_teamgroup", 'ManageTeamGroupController@update_teamgroup');
Route::get("dhioffice/delete_teamgroup/{teamgroupid}", 'ManageTeamGroupController@delete_teamgroup');






