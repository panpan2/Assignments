<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    /**
     *
     * Responds to requests to POST /register
     * Registers user and redirects to
     * "Thank you" page
     *
     */
    public function postRegister() {
        $user = new User();
        $user->email = $_POST["email"];
        $user->name = $_POST["name"];
        $user->save();
        return redirect('thankyou');
    }
}
