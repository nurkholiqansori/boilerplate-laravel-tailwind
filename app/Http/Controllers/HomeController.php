<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $isAuthenticated = auth()->check();
        return view('home', compact('isAuthenticated'));
    }
}
