<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(request $request)
    {
        $programs = Program::all();

        return view('pages.home',[
            'programs' => $programs,
            'title' => 'Seaeducation',
            'active' => 'home'

        ]);
    }
}
