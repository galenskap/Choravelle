<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivatespaceController extends Controller
{
    // Partothèque
    public function partotheque()
    {
        return view('partotheque');
    }
    
    // Trombinoscope
    public function trombinoscope()
    {
        return view('trombinoscope');
    }
}
