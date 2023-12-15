<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function create(){
        return view('create');
    }


    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'email' => 'required|email|unique:guestbooks,email',
            'alamat' => 'required',
            'no_telepon' => 'required'
            ]);
     
        Guestbook::create([
    		'nama' => $request->nama,
            'email' => $request->email,
    		'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
    	]);
 
    	return redirect()->route('read')->with('success', 'data berhasil disimpan');
    }
}
