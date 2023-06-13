<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Buku;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $bukus = Buku::latest()->paginate(5);

        //render view with posts
        return view('aPerpus.koleksibuku', compact('bukus'));
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
        return view('aPerpus.detailbuku', compact('buku'));
    }
}
