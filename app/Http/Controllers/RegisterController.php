<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function index(request $request)
    {
        return view('pages.register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(request $request)
    {

        //validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',

        ]);



        $validatedData['name'] = $request->name;
        $validatedData['email'] = $request->email;

        //hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::insert($validatedData);

        return redirect('index');
    }
}
