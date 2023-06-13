<?php

namespace App\Http\Controllers;

//import Model "Peminjaman"
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class PeminjamanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Peminjamans
        $peminjamans = Peminjaman::with('bukus','anggotas')->latest()->get();

        //render view with Bukus
        return view('peminjaman.peminjaman', compact('peminjamans'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('peminjaman.createpeminjaman');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'id_peminjaman'     => 'required|min:3',
            'id_anggota'   => 'required|min:3',
            'id_buku'   => 'required|min:3',
            'tgl_pinjam'   => 'required',
            'tgl_jatuh_tempo'   => 'required',
        ]);

        //create post
        Peminjaman::create([
            'id_peminjaman' => $request->id_peminjaman,
            'id_anggota'   => $request->id_anggota,
            'id_buku'   => $request->id_buku,
            'tgl_pinjam'   => $request->tgl_pinjam,
            'tgl_jatuh_tempo'   => $request->tgl_jatuh_tempo,
        ]);

        //redirect to index
        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id_peminjaman): View
    {
        //get post by ID
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);

        //render view with post
        return view('peminjaman.editpeminjaman', compact('peminjaman'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id_peminjaman)
    {
        //get post by ID
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);

        //update
        $peminjaman->update([
            'id_peminjaman' => $request->id_peminjaman,
            'id_anggota'   => $request->id_anggota,
            'id_buku'   => $request->id_buku,
            'tgl_pinjam'   => $request->tgl_pinjam,
            'tgl_jatuh_tempo'   => $request->tgl_jatuh_tempo,
        ]);

        //redirect to index
        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Peminjaman $peminjaman)
    {

        // delete post data by id
        $peminjaman->delete();

        // render view
        return back();
    }

    public function show()
    {
        //
    }
}