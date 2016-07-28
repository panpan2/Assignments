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

Route::get(
    '/', function () {
        return view('register');
    }
);

Route::get(
    '/thankyou', function () {
        return view('thankyou');
    }
);

Route::get(
    '/users', function () {
        $users = DB::table('users')->get();
        echo "<p>USERS:</p>";
        echo "<p>----------</p>";
        foreach ($users as $user) {
            echo "<p>$user->name |  $user->email | $user->phone</p>";
        }
    }
);

Route::post(
    '/register_user', [
    'as' => 'register_user', 'uses' => 'UserController@postRegister'
    ]
);
