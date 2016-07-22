<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function home()
    {
        $people = ["o", "ma", "nq"];
        return view('welcome', compact('people'));
    }
}
