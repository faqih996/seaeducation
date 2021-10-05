<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $items = Department::all();

        return view('pages.admin.department.index',[
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
        return view('pages.admin.department.create',[
            'title' => 'CreateDepartment'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Departmentrequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225',
            'slug' => 'required|max:225'
        ]);

        $validatedData['name'] = $request->name;
        $validatedData['status'] = $request->status;
        $validatedData['slug'] = $request->slug;


        //hash password

        Department::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/department')->with('success', 'Department Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Department::findOrFail($id);

        return view('pages.admin.department.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225',
            'slug' => 'required|max:225'
        ]);

        $item = Department::findOrFail($id);

        $item->update($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/department')->with('success', 'Department Has Been Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $item)
    {
            Department::destroy($item->id);
            return redirect('/department')->with('success', 'Department Has Been Deleted!');
    }
}
