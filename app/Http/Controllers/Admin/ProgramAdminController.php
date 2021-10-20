<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Batch;
use App\Http\Requests\Admin\ProgramRequest;
use Illuminate\Support\Str;

class ProgramAdminController extends Controller
{
     public function index(request $request)
    {
        $programs = Program::all();

        return view('pages.admin.program.index',[
            'programs' => $programs
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
            'about' => 'max:255',
            'class' => 'required|max:255',
            'batch_id' => 'required',
            'start_at' => 'date:d-m-Y',
            'end_at' => 'date:d-m-Y',
            'end_reg' => 'date:d-m-Y',
            'status' => 'required|max:255',
            'price' => 'required|max:225',

        ]);

        $validatedData['title'] = $request->title;
        $validatedData['class'] = $request->class;
        $validatedData['about'] = $request->about;
        $validatedData['batch_id'] = $request->batch_id;
        $validatedData['start_at'] = $request->start_at;
        $validatedData['end_at'] = $request->end_at;
        $validatedData['end_reg'] = $request->end_reg;
        $validatedData['price'] = $request->price;
        $validatedData['slug'] = Str::slug($request->title);

        Program::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/master')->with('success', 'Program Has Been Added!');
    }

    public function edit($id)
    {
        $item = Program::findOrFail($id);

        return view('pages.admin.program.edit',[
            'batches' => Batch::all(),
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Program::findOrFail($id);

        $data['slug'] = Str::slug($request->title);

        $item->update($data);

        return redirect('/master')->with('success', 'Program Has Been Edited!');
    }

    public function destroy(Program $id)
    {
        $program = Program::findOrFail($id);
        $program -> delete();
        return redirect('/programadmin')->with('success', 'Program Has Been Deleted!');
    }


        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $department
     * @return \Illuminate\Http\Response
     */

}
