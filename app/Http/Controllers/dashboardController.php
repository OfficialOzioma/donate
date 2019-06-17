<?php

namespace App\Http\Controllers;

use App\User;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect('/');
    }
}
