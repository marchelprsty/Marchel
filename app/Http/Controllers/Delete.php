<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Delete extends Controller
{
    public function halaman_delete(){
        return view('delete');
    }
}
