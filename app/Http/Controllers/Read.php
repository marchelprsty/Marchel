<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guestbook;
use Illuminate\Http\Request;

class Read extends Controller
{
    

    public function read()
    {
        // Mengambil data guestbook dengan paginate
        $guestbooks = Guestbook::simplepaginate(10);

        // Mengirim data guestbook ke view
        return view('read', compact('guestbooks'));
    }
    

}
