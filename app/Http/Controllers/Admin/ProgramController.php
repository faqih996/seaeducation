<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Program::all();

        return view('pages.admin.program.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.program.create',[
            'title' => 'CreateProgram'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225'
        ]);

        $validatedData['name'] = $request->name;
        $validatedData['status'] = $request->status;

        //hash password

        Program::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/program')->with('success', 'Batch Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Program::findOrFail($id);

        return view('pages.admin.department.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225',

        ]);

        $item = Program::findOrFail($id);

        $item->update($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/batch')->with('success', 'Department Has Been Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $item)
    {
        Program::destroy($item->id);
            return redirect('/program')->with('success', 'Batch Has Been Deleted!');
    }
}
