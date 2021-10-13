<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Batch;
use App\Http\Requests\admin\ProgramRequest;
use App\Http\Requests\ProgramRequest as RequestsProgramRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    public function index(request $request)
    {
        $items = Program::all();

        return view('pages.admin.program.index',[
            'items' => $items
        ]);
    }

    public function create(request $request)
    {


        return view('pages.admin.program.create',[
            'batches' => Batch::all()
        ]);
    }

    public function store(ProgramRequest $request)
    {
        $data= $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['excerpt'] = Str::slug($request->body);
        //hash password

       Program::create($data);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/program')->with('success', 'Program Has Been Added!');
    }

}
