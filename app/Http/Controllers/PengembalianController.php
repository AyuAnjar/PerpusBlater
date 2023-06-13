<?php

namespace App\Http\Controllers;

//import Model "Peminjaman"
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

class PengembalianController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Pengembalians
        $pengembalians = Pengembalian::with('peminjamans','bukus','anggotas')->latest()->paginate(5);

        //render view with Pengembalians
        return view('pengembalian.pengembalian', compact('pengembalians'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pengembalian.createpengembalian');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'id_pengembalian'     => 'required|min:3',
            'id_peminjaman'   => 'required',
            'tgl_kembali'   => 'required',
            'denda'   => 'required',
        ]);

        //create post
        Pengembalian::create([
            'id_pengembalian' => $request->id_pengembalian,
            'id_peminjaman' => $request->id_peminjaman,
            'tgl_kembali'   => $request->tgl_kembali,
            'denda'   => $request->denda,
        ]);

        //redirect to index
        return redirect()->route('pengembalian.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id_pengembalian): View
    {
        //get post by ID
        $pengembalian = Pengembalian::findOrFail($id_pengembalian);

        //render view with post
        return view('pengembalian.editpengembalian', compact('pengembalian'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id_pengembalian)
    {
        //get post by ID
        $pengembalian = Pengembalian::findOrFail($id_pengembalian);

        //update
        $pengembalian->update([
            'id_pengembalian' => $request->id_pengembalian,
            'id_peminjaman' => $request->id_peminjaman,
            'tgl_kembali'   => $request->tgl_kembali,
            'denda'   => $request->denda,
        ]);

        //redirect to index
        return redirect()->route('pengembalian.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Pengembalian $pengembalian)
    {

        // delete post data by id
        $pengembalian->delete();

        // render view
        return redirect()->route("pengembalian.index");
    }

    public function show()
    {
        //
    }
}
