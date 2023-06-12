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

class AnggotaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Anggotas
        $anggotas = Anggota::latest()->get();

        //render view with Bukus
        return view('anggota.anggota', compact('anggotas'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('anggota.createanggota');
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
            'id_anggota'     => 'required|min:3',
            'nama'   => 'required',
            'email'   => 'required',
            'pass'   => 'required',
            'telp'   => 'required',
            'alamat'   => 'required',
        ]);

        //create post
        Anggota::create([
            'id_anggota' => $request->id_anggota,
            'nama'   => $request->nama,
            'email'   => $request->email,
            'pass'   => $request->pass,
            'telp'   => $request->telp,
            'alamat'   => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id_anggota): View
    {
        //get post by ID
        $anggota = Anggota::findOrFail($id_anggota);

        //render view with post
        return view('anggota.editanggota', compact('anggota'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id_anggota)
    {
        //get post by ID
        $anggota = Anggota::findOrFail($id_anggota);

        //update
        $anggota->update([
            'id_anggota' => $request->id_anggota,
            'nama'   => $request->nama,
            'email'   => $request->email,
            'pass'   => $request->pass,
            'telp'   => $request->telp,
            'alamat'   => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id_anggota): RedirectResponse
    {
        //get post by ID
        $anggota = Anggota::findOrFail($id_anggota);

        //delete post
        $anggota->delete();

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}