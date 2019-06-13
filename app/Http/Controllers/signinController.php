<?php

namespace App\Http\Controllers;

use App\User;

class signinController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['execpt' => 'destroy']);
    }
    public function index()
    {
        return view('signin')->with('title', 'sign-in');
    }

    public function store()
    {
      if(! auth()->attempt(request(['email', 'password'])) ){
          return back();
      }

      return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
