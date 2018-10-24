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

Route::get("/", 'MainController@index');

Route::get("login", 'MemberController@loginform');
Route::post("member/login", 'MemberController@login');
Route::get("member/profile", 'MemberController@profile');
Route::get("logout", 'MemberController@logout');



## EXAMPLE
## Route::get("menu_privileges/view", 'Privileges\MenuPrivilegesController@index');