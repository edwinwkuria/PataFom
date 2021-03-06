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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'EventController@index')->name('home');
Route::resource('User','UserdetailsController');
Route::resource('Event','EventController');
Route::resource('comment','CommentsController');
Route::get('/EventCategory/{EventCategory}', 'EventCategoryController@show');
//Route::get('/userevent',function(){return view('Event.userevent');});
Route::resource('EventUser','EventUserController');
Route::resource('eventOrganizer','eventOrganizerController');
Route::post('eventOrganizerLogin', 'Auth\eventOrganizerLoginController@login');