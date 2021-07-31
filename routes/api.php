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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', 'API\UserController@login');
Route::get('invalid-token', 'API\UserController@invalidToken')->name('login');



Route::middleware(['auth:api'])->group(function (){
Route::get('get-contact', 'API\MainController@contact');
Route::get('get-organization', 'API\MainController@organization');
Route::get('get_filter_organization', 'API\MainController@get_filter_organization');
Route::get('get_filter_email', 'API\MainController@get_filter_email');




});

