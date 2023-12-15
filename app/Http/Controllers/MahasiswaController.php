<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index' , compact('mahasiswas') );
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required',
            'tanggal_lahir' => 'required',
            
    	]);
 
        Mahasiswa::create([
    		'nama' => $request->nama,
            'alamat' => $request->email,
    		'tanggal_lahir' => $request->alamat,
           
    	]);
 
    	return redirect()->route('mahasiswa.index')->with('success', 'data berhasil disimpan');
    }
}
