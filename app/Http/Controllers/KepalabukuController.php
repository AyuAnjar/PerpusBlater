<?php

namespace App\Http\Controllers;

//import Model "Buku
use App\Models\Buku;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class KepalabukuController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Bukus
        $bukus = Buku::latest()->paginate(5);

        //render view with Bukus
        return view('kepala.buku', compact('bukus'));
    }

    public function cetakBuku(): View
    {
        //get Bukus
        $bukus = Buku::latest()->get();

        //render view with Bukus
        return view('kepala.cetakbuku', compact('bukus'));
    }
}
