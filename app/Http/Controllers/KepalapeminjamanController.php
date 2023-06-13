<?php

namespace App\Http\Controllers;

//import Model "Buku
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class kepalapeminjamanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Bukus
        $peminjamans = Peminjaman::with('bukus','anggotas')->latest()->paginate(5);

        //render view with Bukus
        return view('kepala.peminjaman', compact('peminjamans'));
    }

    public function cetakPeminjaman(): View
    {
        //get Bukus
        $peminjamans = Peminjaman::latest()->get();

        //render view with Bukus
        return view('kepala.cetakpeminjaman', compact('peminjamans'));
    }
}
