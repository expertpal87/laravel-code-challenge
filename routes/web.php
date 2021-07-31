<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::post('SubmitLoginData','LoginController@SubmitLoginData');


Route::get('contact-email-varified/{emailid}','EmailVarifiedController@EmailVarifiedController');

Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){

Route::get('dashboard','AdminController@dashboard');

Route::get('contact','ContactController@index');
Route::get('create-contact','ContactController@create');
Route::post('store-contact','ContactController@store');

Route::get('edit-contact/{contactId}','ContactController@edit');
Route::post('update-contact','ContactController@update');
Route::get('delete-contact/{contactId}','ContactController@deleteContact');


Route::get('organization','OrganizationController@index');
Route::get('create-organization','OrganizationController@create');
Route::post('store-organization','OrganizationController@store');

Route::get('edit-organization/{organizationId}','OrganizationController@edit');
Route::post('update-organization','OrganizationController@update');

Route::get('delete-organization/{organizationId}','OrganizationController@deleteOrganization');

Route::get('logout','AdminController@logout');


});


