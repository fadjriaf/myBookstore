<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;

class userController extends Controller
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

        return view('user.index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $single = User::findOrfail($id);

        return view('user.single')->with('single', $single);
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
        $edit = User::where('id', $id)->first();

        return view('user.edit')->with('edit', $edit);
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
        $update = User::where('id', $id)->first();
        $update->nama = $request['nama'];
        $update->username = $request['username'];
        $update->alamat = $request['alamat'];
        $update->telepon = $request['telepon'];
        $update->update();

        Alert::success(' ', 'User berhasil diupdate!');

        return redirect()->to('/user');
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
        $hapus = User::find($id);
        $hapus->delete();

        Alert::success(' ', 'User berhasil dihapus!');

        return redirect()->to('/user');
    }
}
