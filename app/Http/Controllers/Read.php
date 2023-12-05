<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Read extends Controller
{
    public function halaman_read(){
        return view('read');
    }
}
