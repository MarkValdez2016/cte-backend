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
//Aunthentication 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('teacheraccount/create', '\App\Http\Controllers\RegisterController@create');


//profile 
Route::resource('profile', '\App\Http\Controllers\ProfileController');

Route::post('profile/update/{id}','\App\Http\Controllers\ProfileController@update');

Route::delete('profile/destroy/{id}','ProfileController@destroy');

Route::get('profile/show/{id}','\App\Http\Controllers\ProfileController@show');

Route::get('profiledata/show','\App\Http\Controllers\ProfileController@viewRecord');


//Announcement

Route::resource('announcement_type','\App\Http\Controllers\AnnouncementTypeController');

Route::resource('announcements','\App\Http\Controllers\AnnouncementController');

Route::delete('announcements/destroy/{id}','AnnouncementController@destroy');   

Route::post('announcements/update/{id}','\App\Http\Controllers\AnnouncementController@update');

Route::get('announcements/show/{id}','\App\Http\Controllers\AnnouncementController@show');



//AcademicWorks

Route::resource('academicWork', '\App\Http\Controllers\AcademicWorkController');

Route::post('academicwork/update/{id}', '\App\Http\Controllers\AcademicWorkController@update');

Route::get('academicwork/show/{id}','\App\Http\Controllers\AcademicWorkController@show');

