<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Batch;
use App\Models\Department;
use App\Http\Requests\Admin\ProgramRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    public function index(request $request)
    {
        $program = Program::all();

        return view('pages.programs.index',[
            'program' => $program
        ]);
    }

    public function show(program $program)
    {
        $departments = Department::all();
        return view('pages.programs.detail',[
            "program"=> $program,
            "departments"=> $departments
        ]);

    }

}
