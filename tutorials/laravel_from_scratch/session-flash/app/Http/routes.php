<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['middleware' => ['web']], function () {
Route::get('begin', function () {
    //Session::flash('flash_message', 'Hello There');
    flash('You are now signed in!', 'success');
    return redirect('/');
});

Route::get('/', function () {
    return view('welcome');
});
//});
