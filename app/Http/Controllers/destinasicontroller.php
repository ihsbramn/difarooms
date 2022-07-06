<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class destinasicontroller extends Controller
{
    public function destinasi()
    {
        return view('destinasi/index');
    }
    
    public function bandung()
    {
        return view('destinasi/bandung');
    }
    
    public function asaf()
    {
        return view('destinasi/asaf');
    }
}
