<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(request $request)
    {
        return view('pages.auth.login');
    }
}
