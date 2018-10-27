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



Route::get("dhioffice", 'AdminController@index');
Route::get("dhioffice/manage_product", 'ManageProductController@manage_product');
Route::get("dhioffice/add_product", 'ManageProductController@add_product_view');
Route::post("dhioffice/save", 'ManageProductController@save_product');







