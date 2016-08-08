<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

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
        User::create(array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone')
        ));

        return Response::json(array('suceess' => true));
    }
}
