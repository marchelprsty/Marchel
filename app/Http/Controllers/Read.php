<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Hash;

class Read extends Controller
{

    public function halaman_read(Request $request){
        return view('read',['data' => $request]);
    }

    
}
