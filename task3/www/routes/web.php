<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a given Closure or controller and enjoy the fresh air.
|
*/


Route::get('/', function () {
    return view('register');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/users', function() {
    $users = DB::table('users')->get();
    echo "<p>USERS:</p>";
    echo "<p>----------</p>";
    foreach ($users as $user) {
        echo "<p>$user->name |  $user->email</p>";
    }
});

Route::post('/register_user', [
    'as' => 'register_user', 'uses' => 'UserController@postRegister'
]);
