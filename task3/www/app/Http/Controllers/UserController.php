<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     * Responds to requests to POST /register
     * Registers user and redirects to
     * "Thank you" page
     *
     */
    public function postRegister(Request $request)
    {
        $this->validate(
            $request, [
            'name' => 'required|max:255|string|alpha',
            'email' => 'required|unique:users,email|max:255|string|email',
            ]
        );
        // user data is valid
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        return redirect('thankyou');
    }
}
