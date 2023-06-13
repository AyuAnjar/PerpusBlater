<?php

namespace App\Http\Controllers;

//import Model "Buku
use App\Models\Pengembalian;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class KepalapengembalianController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Bukus
        $pengembalians = Pengembalian::with('peminjamans','bukus', 'anggotas')->latest()->paginate(5);

        //render view with Bukus
        return view('kepala.pengembalian', compact('pengembalians'));
    }

    public function cetakPengembalian(): View
    {
        //get Bukus
        $pengembalians = Pengembalian::latest()->get();

        //render view with Bukus
        return view('kepala.cetakpengembalian', compact('pengembalians'));
    }
}
