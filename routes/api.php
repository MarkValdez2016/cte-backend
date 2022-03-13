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

Route::get('/products',function()
{
    return 'products';
});

//Add profile 
Route::resource('profile', '\App\Http\Controllers\ProfileController');

Route::resource('announcement_type','\App\Http\Controllers\AnnouncementTypeController');

Route::resource('announcements','\App\Http\Controllers\AnnouncementController');

Route::resource('academicWork', '\App\Http\Controllers\AcademicWorkController');

Route::delete('delete_profile/{id}',[ProfileController::class, 'delete']);
