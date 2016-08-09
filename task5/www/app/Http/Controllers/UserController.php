<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    /*
     * Sends back all registered users as JSON
     */
    public function index(Request $request)
    {
        return Response::json(User::get());
    }

    /*
     * Store a newly created user in storage
     */
    public function store(Request $request)
    {
        // Validate in case request is send from outside of the form
        $this->validate(
            $request, [
                'name' => 'required|max:255|string|alpha',
                'email' => 'required|unique:users,email|max:255|string|email',
                'phone' => 'required|max:9999999999999|string|integer',
            ]
        );

        User::create(array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone')
        ));

        return Response::json(array('suceess' => true));
    }
}
