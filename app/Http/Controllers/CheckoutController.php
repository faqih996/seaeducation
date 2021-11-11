<?php

namespace App\Http\Controllers;

use App\Models\checkoutModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.checkout',[

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkoutModel  $checkoutModel
     * @return \Illuminate\Http\Response
     */
    public function show(checkoutModel $checkoutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkoutModel  $checkoutModel
     * @return \Illuminate\Http\Response
     */
    public function edit(checkoutModel $checkoutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\checkoutModel  $checkoutModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checkoutModel $checkoutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkoutModel  $checkoutModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkoutModel $checkoutModel)
    {
        //
    }
}
