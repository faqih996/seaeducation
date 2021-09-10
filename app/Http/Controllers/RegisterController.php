<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function index(request $request)
    {
        return view('pages.auth.register');
    }

    public function store(request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
    }
}
