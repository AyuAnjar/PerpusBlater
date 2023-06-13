<?php

namespace App\Http\Controllers;

//import Model "Anggota
use App\Models\Anggota;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class KepalaanggotaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get anggota
        $anggotas = Anggota::latest()->paginate(5);

        //render view with Bukus
        return view('kepala.anggota', compact('anggotas'));
    }

    public function cetakAnggota(): View
    {
        //get Bukus
        $anggotas = Anggota::latest()->get();

        //render view with Bukus
        return view('kepala.cetakanggota', compact('anggotas'));
    }
}
