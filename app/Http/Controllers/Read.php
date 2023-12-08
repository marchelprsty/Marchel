<?php

namespace App\Http\Controllers;

use App\Models\Guestbook;
use Illuminate\Http\Request;

class Read extends Controller
{
    

    public function halaman_read()
    {
        // Mengambil data guestbook dengan paginate
        $guests = Guestbook::simplepaginate(10);

        // Mengirim data guestbook ke view
        return view('read', ['guests' => $guests]);
    }

    public function cari(Request $request)
{
    $keyword = $request->input('keyword');

    $hasilPencarian = Guestbook::where('nama', 'like', '%' . $keyword . '%')
        ->orWhere('alamat', 'like', '%' . $keyword . '%')
        ->orWhere('email', 'like', '%' . $keyword . '%')
        ->orWhere('no_telepon', 'like', '%' . $keyword . '%')
        ->simplepaginate(10);

    return view('read', ['guests' => $hasilPencarian, 'keyword' => $keyword]);
}
    

}
