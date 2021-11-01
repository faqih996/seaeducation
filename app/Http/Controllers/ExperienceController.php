<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.profile.create',[
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225',

        ]);

        $validatedData['name'] = $request->name;
        $validatedData['status'] = $request->status;
        $validatedData['slug'] = Str::slug($request->name);



        //hash password

        Experience::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/profile')->with('success', 'Experience Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Request $department)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Experience::findOrFail($id);

        return view('pages.admin.department.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $item = Experience::find($id)->update($data);

        return redirect('/profile')->with('success', 'Experience Has Been Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $item)
    {
            Experience::destroy($item->id);
            return redirect('/profile')->with('success', 'Experience Has Been Deleted!');
    }
}