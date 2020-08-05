<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Home
    public function home()
    {
        return view('home');
    }
}
