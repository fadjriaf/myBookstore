<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\distrib;
use Alert;


class distribController extends Controller
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

        return view('distrib.index',['distrib' => $distrib]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('distrib.create');
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
        $tambah = new distrib();
        $tambah->nama = $request->nama;
        $tambah->alamat = $request->alamat;
        $tambah->telepon = $request->telepon;
        $tambah->save();

        Alert::success(' ', 'Distributor berhasil dibuat!');

        return redirect()->to('/distrib');
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
        $single = distrib::find($id);

        if(!$single){
            abort(404);
        }

        return view('distrib.single')->with('single', $single);
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
        $edit = distrib::find($id);
        return view('distrib.edit')->with('edit', $edit);
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
        $update = distrib::find($id);
        $update->nama = $request->nama;
        $update->alamat = $request->alamat;
        $update->telepon = $request->telepon;
        $update->save();

        Alert::success(' ', 'Distributor berhasil diupdate!');

        return redirect()->to('/distrib');
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
        $delete = distrib::find($id);
        $delete->delete();

        Alert::success(' ', 'Distributor berhasil dihapus!');

        return redirect('distrib');
    }
}
