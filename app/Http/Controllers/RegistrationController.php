<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('signup');
    }

    public function store()
    {
        //vailidate the user
        $this->validate(request(), [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:6',
            'conditions' => 'required',
        ]);

        // create and save a user

        $user = User::create(request(['name', 'email', 'username', 'password', 'conditions']));

        //login the user

        auth()->login($user);

        //redirect to the home page

        return redirect()->home();
    }
}
