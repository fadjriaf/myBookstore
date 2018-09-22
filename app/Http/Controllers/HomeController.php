<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use App\distrib;
use App\pasok;
use App\penjualan;
use App\User;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buku = buku::all();
        $distrib = distrib::all();
        $pasok = pasok::all();
        $user = User::all();
        $penjualan = penjualan::all();

        return view('home' , compact('penjualan', 'distrib', 'user','buku'))
                    ->with('buku',$buku)
                    ->with('distrib', $distrib)
                    ->with('pasok',$pasok)
                    ->with('penjualan', $penjualan);
    }
}
