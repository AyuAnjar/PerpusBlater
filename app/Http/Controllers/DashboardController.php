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

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Bukus
        $dashboard = Buku::latest()->paginate(5);

        //render view with Bukus
        return view('dashboard', compact('bukus'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id_buku): View
    {
        //get post by ID
        $buku = Buku::findOrFail($id_buku);

        //render view with post
        return view('buku', compact('buku'));
    }
}