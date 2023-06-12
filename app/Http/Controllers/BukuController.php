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

class BukuController extends Controller
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
        return view('buku.buku', compact('bukus'));
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
        return view('buku.buku', compact('buku'));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('buku.createbuku');
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
        $request->validate([
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'id_buku'     => 'required|min:3',
            'judul'   => 'required',
            'pengarang'   => 'required',
            'penerbit'   => 'required',
            'thn_terbit'   => 'required',
            'stok'   => 'required',
            'lokasi'   => 'required',
        ]);

        //upload image
        $newNameImage = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('image'), $newNameImage);

        //Memasukan data
        // $buku = new Buku;

        // $buku->id_buku = $request['id_buku'];
        // $buku->foto = $newNameImage;
        // $buku->judul = $request['judul'];
        // $buku->pengarang = $request['pengarang'];
        // $buku->penerbit = $request['penerbit'];
        // $buku->thn_terbit = $request['thn_terbit'];
        // $buku->stok = $request['stok'];
        // $buku->lokasi = $request['lokasi'];

        //create post
        Buku::create([
            'gambar'     => $newNameImage,
            'id_buku'     => $request->id_buku,
            'judul'   => $request->judul,
            'pengarang'   => $request->pengarang,
            'penerbit'   => $request->penerbit,
            'thn_terbit'   => $request->thn_terbit,
            'stok'   => $request->stok,
            'lokasi'   => $request->lokasi,
        ]);

        //redirect to index
        
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id_buku): View
    {
        //get post by ID
        $buku = Buku::findOrFail($id_buku);

        //render view with post
        return view('buku.editbuku', compact('buku'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id_buku)
    {
        //get post by ID
        $buku = Buku::findOrFail($id_buku);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/image', $image->hashName());

            //delete old image
            Storage::delete('public/image/' . $buku->image);

            //update post with new image
            $buku->update([
                'id_buku'     => $request->id_buku,
                'judul'   => $request->judul,
                'pengarang'   => $request->pengarang,
                'penerbit'   => $request->penerbit,
                'thn_terbit'   => $request->thn_terbit,
                'stok'   => $request->stok,
                'lokasi'   => $request->lokasi,
            ]);
        } else {

            //update post without image
            $buku->update([
                'id_buku'     => $request->id_buku,
                'judul'   => $request->judul,
                'pengarang'   => $request->pengarang,
                'penerbit'   => $request->penerbit,
                'thn_terbit'   => $request->thn_terbit,
                'stok'   => $request->stok,
                'lokasi'   => $request->lokasi,
            ]);
        }

        //redirect to index
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id_buku): RedirectResponse
    {
        //get post by ID
        $buku = Buku::findOrFail($id_buku);

        //delete image
        Storage::delete('public/image/' . $buku->gambar);

        //delete post
        $buku->delete();

        //redirect to index
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}