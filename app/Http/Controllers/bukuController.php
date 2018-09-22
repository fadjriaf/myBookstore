<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use Alert;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        
        $buku = buku::all();

        return view('buku.index',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tambah = new buku();
        $tambah->judul = $request->judul;
        $tambah->noisbn = $request->noisbn;
        $tambah->penulis = $request->penulis;
        $tambah->penerbit = $request->penerbit;
        $tambah->tahun = $request->tahun;
        $tambah->stok = $request->stok;
        $tambah->harga_pokok = $request->harga_pokok;
        $tambah->harga_jual = $request->harga_jual;
        $tambah->ppn = $request->ppn;
        $tambah->diskon = $request->diskon;

        $tambah->save();

        Alert::success(' ', 'Buku berhasil dibuat!');

        return redirect()->to('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $single = buku::find($id);

        if(!$single){
            abort(404);
        }

        return view('buku.single')->with('single', $single);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = buku::find($id);

        return view('buku.edit')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = buku::find($id);
        $update->judul = $request->judul;
        $update->noisbn = $request->noisbn;
        $update->penulis = $request->penulis;
        $update->penerbit = $request->penerbit;
        $update->tahun = $request->tahun;
        $update->stok = $request->stok;
        $update->harga_pokok = $request->harga_pokok;
        $update->harga_jual = $request->harga_jual;
        $update->ppn = $request->ppn;
        $update->diskon = $request->diskon;
        $update->save();

        Alert::success(' ', 'Buku berhasil diupdate!');

        return redirect()->to('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hapus = buku::find($id);
        $hapus->delete();

        Alert::success(' ', 'Buku berhasil dihapus!');

        return redirect()->to('/buku');
    }
}
