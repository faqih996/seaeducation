<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index(request $request)
    {
        return view('pages.about.index', [
            
        ]);
    }
}
