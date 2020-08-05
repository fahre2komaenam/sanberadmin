<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    // Halaman Regisrasi
    public function registrasi()
    {
        return view('registrasi');
    }

    // Halaman Welcome
    public function welcome(Request $request)
    {
        $first = $request->input('fname');
        $last = $request->input('lname');

        return view('/welcome', ['First' => $first, 'Last' => $last]);
    }
}
