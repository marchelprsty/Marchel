<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function read()
    {
        $guestbooks = Guestbook::simplepaginate(10);
        return view('read', compact('guestbooks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);

        Guestbook::create([
    		'nama' => $request->nama,
            'email' => $request->email,
    		'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
    	]);

        return redirect()->route('read')
            ->with('success', 'data created successfully.');
    }

    public function edit($id)
    {
        $guestbooks = Guestbook::find($id);
        return view('edit', compact('guestbooks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);

        $guestbooks = Guestbook::find($id);

        $guestbooks->nama = $request->input('nama');
        $guestbooks->email = $request->input('email');
        $guestbooks->alamat = $request->input('alamat');
        $guestbooks->no_telepon = $request->input('no_telepon');
        $guestbooks->save();

        return redirect()->route('read')
            ->with('success', 'data update successfully');
    }

    public function destroy($id)
    {
        Guestbook::find($id)->delete();

        return redirect()->route('read')
            ->with('success', 'data deleted successfully');
    }
}
