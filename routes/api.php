<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventImageController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route for messages table
Route::post('/message','App\Http\Controllers\MessageController@create');

Route::put('/messageupdate/{id}','App\Http\Controllers\MessageController@updatebyid');

Route::delete('messagedelete/{id}', 'App\Http\Controllers\MessageController@deletebyid');

Route::get('messageshow', 'App\Http\Controllers\MessageController@show');


//Route for users table
Route::post('/users','App\Http\Controllers\UserController@create');

Route::put('/usersupdate/{id}','App\Http\Controllers\UserController@updatebyid');

Route::delete('usersdelete/{id}', 'App\Http\Controllers\UserController@deletebyid');


//Route for events table
Route::post('/events','App\Http\Controllers\EventController@create');

Route::put('/eventsupdate/{id}','App\Http\Controllers\EventController@updatebyid');

Route::delete('eventsdelete/{id}', 'App\Http\Controllers\EventController@deletebyid');

//Route for event_images table

Route::post('/event_images','App\Http\Controllers\EventImageController@create');

Route::get('/eventimagesresource','App\Http\Controllers\EventImageController@index');

Route::put('/event_imagesupdate/{id}','App\Http\Controllers\EventImageController@updatebyid');

Route::delete('event_imagesdelete/{id}', 'App\Http\Controllers\EventImageController@deletebyid');

Route::get('event_imageshow', 'App\Http\Controllers\EventImageController@show');

Route::post('uploadevent_images',[EventImageController::class,'store']);

//Route for frames table

Route::post('/frames','App\Http\Controllers\FramesController@create');

Route::get('/frameresource','App\Http\Controllers\FramesController@index');

Route::get('/showframe/{id}','App\Http\Controllers\FramesController@showbyid');

Route::put('/framesupdate/{id}','App\Http\Controllers\FramesController@updatebyid');

Route::delete('framesdelete/{id}', 'App\Http\Controllers\FramesController@deletebyid');


//Route for frames icon table

Route::post('/framesicon','App\Http\Controllers\FrameIconsController@create');

Route::get('/frameicons_resource','App\Http\Controllers\FrameIconsController@index');

Route::get('/showicon/{id}','App\Http\Controllers\FrameIconsController@showbyid');

Route::put('/framesiconupdate/{id}','App\Http\Controllers\FrameIconsController@updatebyid');

Route::delete('framesicondelete/{id}', 'App\Http\Controllers\FrameIconsController@deletebyid');



