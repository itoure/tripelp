<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('trip', function()
{
	return View::make('trip/index');
});*/

/*Route::get('users', function()
{
    $users = User::all();
    return View::make('users')->with('users', $users);
});*/

Route::get('/', 'IndexController@getIndex');

Route::get('trip/add', 'TripController@add');
Route::get('trip/plan', 'TripController@plan');
