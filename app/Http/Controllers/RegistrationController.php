<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signup')->with('title', 'sign-up');
    }

    public function store(Request $request)
    {
        //vailidate the user
        $this->validate(request(), [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:3|max:50|unique:users',
            'password' => 'required|min:6',
            'conditions' => 'required',
        ]);

        // create and save a user
       // $hashedPassword = Hash::make($request->password);
        //dd($hashedPassword);

        $user = User::create([
            'name'       =>  $request->name,
            'email'      =>  $request->email, 
            'username'   =>  $request->username, 
            'password'   =>  Hash::make($request->password), 
            'conditions' =>  $request->conditions
        ]);

       

        //login the user

        auth()->login($user);

        //redirect to the home page

        return redirect()->home();
    }
}
