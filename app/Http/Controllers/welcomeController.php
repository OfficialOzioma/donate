<?php

namespace App\Http\Controllers;

class welcomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
