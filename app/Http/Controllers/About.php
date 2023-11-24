<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function halaman_about(){
        return view('about');
    }
}
