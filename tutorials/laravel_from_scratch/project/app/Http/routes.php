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

//Route::get('/', function () {
//    $people = ["o", "ma", "nq"];
//    return view('welcome', compact('people'));
//});
//
//Route::get('/about', function () {
//    return view('pages.about');
//});

Route::get('/', 'PageController@home');
