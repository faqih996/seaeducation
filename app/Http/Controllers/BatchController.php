<?php

namespace App\Http\Controllers;
use App\Http\Requests\BatchRequest;
use App\Models\Batch;
use Illuminate\Http\Request;



class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        $items = Batch::all();

        return view('pages.admin.batch.index',[
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
        return view('pages.admin.batch.create',[
            'title' => 'CreateBatch'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Batchrequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225'
        ]);

        $validatedData['name'] = $request->name;
        $validatedData['status'] = $request->status;

        //hash password

        Batch::insert($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/batch')->with('success', 'Batch Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Batch::findOrFail($id);

        return view('pages.admin.department.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'status' => 'required|max:225',

        ]);

        $item = Batch::findOrFail($id);

        $item->update($validatedData);

        //$request->session()->flash('success', 'Registrasi berhasil! Silahkan Login');
        return redirect('/department')->with('success', 'Department Has Been Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        Batch::destroy($batch->id);
        return redirect('/batch')->with('success', 'Batch Has Been Deleted!');
    }
}
