<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use App\pasok;
use App\distrib;
use Alert;

class pasokController extends Controller
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
        $distrib = distrib::all();
        $buku = buku::all();
        $pasok =pasok::all();
        
        return view('pasok.index',['pasok' => $pasok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $distrib = distrib::all();
        $buku = buku::all();

        return view('pasok.create', compact('distrib','buku'));
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
        $tambah = new pasok();
        $tambah->buku_id = $request->buku_id;
        $tambah->distrib_id = $request->distrib_id;
        $tambah->jumlah = $request->jumlah;
        $tambah->tanggal = $request->tanggal;

        $tambah->save();

        $jumlah = $request->jumlah;
        $tambah_buku = Buku::where('id', '=', $request['buku_id'])->first();
        $tambah_buku->stok += $jumlah;

        $tambah_buku->update();

        Alert::success(' ', 'Pasok berhasil dibuat!');

        return redirect()->to('/pasok');
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
        $distrib = distrib::all();
        $buku = buku::all();
        $single = pasok::find($id);

        if(!$single){
            abort(404);
        }

        return view('pasok.single', compact('pasok','buku','distrib'))->with('single', $single);
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
        $distrib = distrib::all();
        $buku = buku::all();
        $pasok = pasok::where('id', $id)->first();

        return view('pasok.edit', compact('pasok','buku','distrib'));
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
        $update = pasok::where('id', $id)->first();
        $update->buku_id = $request->buku_id;
        $update->distrib_id = $request->distrib_id;
        $update->jumlah = $request->jumlah;
        $update->tanggal = $request->tanggal;

        $update->update();

        Alert::success(' ', 'Pasok berhasil diupdate!');

        return redirect()->to('/pasok');
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
        $hapus = pasok::find($id);
        $hapus->delete();

        Alert::success(' ', 'Pasok berhasil dihapus!');

        return redirect()->to('/pasok');
    }
}
