<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', 'UserController@index');

Route::middleware('auth:sanctum')->get('/allmembers', 'MembersController@allMembers'); 

Route::middleware('auth:sanctum')->post('/addmember', 'MembersController@addMember');

Route::middleware('auth:sanctum')->post('/upmember', 'MembersController@upMember');

Route::middleware('auth:sanctum')->post('/delete', 'MembersController@deleteMember');

Route::middleware('auth:sanctum')->get('/memberbyemail', 'MembersController@getMemberByEmail');

Route::middleware('auth:sanctum')->get('/memberbyevent', 'MembersController@getMemberByEvent');


Route::post('/del', 'MembersController@deleteMember'); //Route for unit test
