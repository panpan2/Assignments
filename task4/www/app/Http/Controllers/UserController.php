<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    /**
     *
     * Responds to POST requests of /register
     * Registers user if the form input is valid
     * and redirects to "Thank you" page
     *
     */
    public function postRegister(Request $request)
    {
        $this->validate(
            $request, [
                'name' => 'required|max:255|string|alpha',
                'email' => 'required|unique:users,email|max:255|string|email',
                'phone' => 'required|max:99999999999|string|integer',
            ]
        );
        // form input was vali
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        return redirect('thankyou');
    }
}
