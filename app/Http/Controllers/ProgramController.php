<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Batch;
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

    public function create(request $request)
    {


        return view('pages.admin.program.create',[
            'batches' => Batch::all()
        ]);
    }

    public function store(request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:225',
            'batch_id' => 'required',
            'start_at' => 'date',
            'end_at' => 'date',
            'class' => 'required',
            'price' => 'required|max:225',

        ]);

        $validatedData['title'] = $request->title;
        $validatedData['batch_id'] = $request->batch_id;
        $validatedData['start_at'] = $request->start_at;
        $validatedData['end_at'] = $request->end_at;
        $validatedData['class'] = $request->class;
        $validatedData['price'] = $request->price;
        $validatedData['slug'] = Str::slug($request->title);

        Program::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/program')->with('success', 'Department Has Been Added!');
    }

    public function destroy(Program $item)
    {
        $item = Program::findOrFail($item->id);
        Program::destroy($item->id);
        return redirect('program')->with('success', 'Program Has Been Deleted!');
    }

}
