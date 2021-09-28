<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(request $request)
    {
        return view('pages.program', [
        "title" => "Programs",
        "program" => Program::all()

        ]);
    }


    public function show ($slug){
        return view('pages.detail', [
            "title" => "detail",
            "post" => Program::find($slug)
        ]);
    }
}
