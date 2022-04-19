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

//Register

Route::post('register', 'App\Http\Controllers\Auth\RegisterController@store');

Route::post('register/destroy/{id}', '\App\Http\Controllers\Auth\RegisterController@destroy');




//profile 
Route::resource('profile', '\App\Http\Controllers\ProfileController');

Route::post('profile/update/{id}','\App\Http\Controllers\ProfileController@update');

Route::delete('profile/destroy/{id}','\App\Http\Controllers\ProfileController@destroy');

Route::get('profile/show/{id}','\App\Http\Controllers\ProfileController@show');

Route::get('profiledata/show','\App\Http\Controllers\ProfileController@viewRecord');

//Employment Information 

Route::resource('employmentinformation', '\App\Http\Controllers\EmploymentInformationController');

Route::post('employmentinformation/update/{id}','\App\Http\Controllers\EmploymentInformationController@update');

Route::get('employmentinformation/show/{id}','\App\Http\Controllers\EmploymentInformationController@show');

//Educational Background

Route::resource('educationalbackground', '\App\Http\Controllers\EducationalBackgroundController');

Route::post('educationalbackground/update/{id}','\App\Http\Controllers\EducationalBackgroundController@update');

Route::delete('educationalbackground/destroy/{id}','\App\Http\Controllers\EducationalBackgroundController@destroy');

Route::get('educationalbackground/show/{id}','\App\Http\Controllers\EducationalBackgroundController@show');

//Analytics

Route::get('analytics/show/all','\App\Http\Controllers\AnalyticsController@index');

//Faculties

// Route::get('faculties/show/all', 'App\Http\Controllers\FacultiesController@index');


//Announcement

Route::resource('announcement_type','\App\Http\Controllers\AnnouncementTypeController');

Route::resource('announcements','\App\Http\Controllers\AnnouncementController');

Route::post('announcements/store','\App\Http\Controllers\AnnouncementController@store');   

Route::delete('announcements/destroy/{id}','\App\Http\Controllers\AnnouncementController@destroy');   

Route::post('announcements/update/{id}','\App\Http\Controllers\AnnouncementController@update');

Route::get('announcements/show/all','\App\Http\Controllers\AnnouncementController@show');


//AcademicWorks

Route::resource('academicWork', '\App\Http\Controllers\AcademicWorkController');

Route::post('academicwork/update/{id}', '\App\Http\Controllers\AcademicWorkController@update');

Route::get('academicwork/show/{id}','\App\Http\Controllers\AcademicWorkController@show');

//Petition (Request)

Route::resource('petitions', '\App\Http\Controllers\PetitionController');

Route::get('petitions/show/{id}','\App\Http\Controllers\PetitionController@show');

