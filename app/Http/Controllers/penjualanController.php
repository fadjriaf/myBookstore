<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
use App\User;
use App\buku;
use Alert;

class penjualanController extends Controller
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
        $user = User::all();
        $buku = buku::all();
        $penjualan = penjualan::all();

        return view('penjualan.index',['penjualan' => $penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        $buku = buku::all();

        return view('penjualan.create', compact('user','buku'));
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
        $jumlah = $request->jumlah;
        $harga = $request->harga;
        $ppn = $request->ppn;
        $diskon = $request->diskon;

        $total = $harga * $jumlah;
        $total_ppn = $total * $ppn / 100;
        $total_diskon = $total * $diskon / 100;

        $total_semua = $total + $total_ppn - $total_diskon;

        $tambah = new penjualan();
        $tambah->user_id = $request->user_id;
        $tambah->buku_id = $request->buku_id;
        $tambah->total =  $total_semua;
        $tambah->jumlah = $request->jumlah;
        $tambah->tanggal = $request->tanggal;

        $tambah->save();

        $jumlah = $request->jumlah;
        $tambah_buku = buku::where('id', '=', $request['buku_id'])->first();
        $tambah_buku->stok -= $jumlah;

        $tambah_buku->update();

        Alert::success(' ', 'Penjualan berhasil dibuat!');

        return redirect()->to('/penjualan');
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
        $user = User::all();
        $buku = buku::all();
        $single = penjualan::find($id);

        if(!$single){
            abort(404);
        }

        return view('penjualan.single', compact('penjualan','buku','user'))->with('single', $single);
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
        $user = User::all();
        $buku = buku::all();
        $penjualan = penjualan::where('id', $id)->first();
        return view('penjualan.edit', compact('penjualan','buku','user'));
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
        $update = penjualan::where('id', $id)->first();
        $update->buku_id = $request->buku_id;
        $update->user_id = $request->user_id;
        $update->jumlah = $request->jumlah;
        $update->tanggal = $request->tanggal;
        $update->update();

        Alert::success(' ', 'Penjualan berhasil diupdate!');

        return redirect()->to('/penjualan');
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
        $hapus = penjualan::find($id);
        $hapus->delete();

        Alert::success(' ', 'Penjualan berhasil dihapus!');

        return redirect()->to('/penjualan');
    }
}
