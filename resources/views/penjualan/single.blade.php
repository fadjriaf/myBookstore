@extends('layouts.isi')

@section('content')
<div class="container">
    <div class="row">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Penjualan</div>

                <div class="panel-body">
                    <p><b>Petugas Kasir</b> : {{ $single->user->nama }}</p>
                    <p><b>Judul Buku</b> : {{ $single->buku->judul }}</p>
                    <p><b>Total</b> : {{ $single->total }}</p>
                    <p><b>Jumlah</b> : {{ $single->jumlah }}</p>
                    <p><b>Tanggal</b> : {{ $single->tanggal }}</p><br>
                    <a href="/pasok"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection