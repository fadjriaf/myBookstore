@extends('layouts.isi')

@section('content')

    <div class="row">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Detail Buku</h3></div>

                <div class="panel-body">
                    <p><b>Judul</b> : {{ $single->judul }}</p>
                    <p><b>No.ISBN</b> : {{ $single->noisbn }}</p>
                    <p><b>Penulis</b> : {{ $single->penulis }}</p>
                    <p><b>Penerbit</b> : {{ $single->penerbit }}</p>
                    <p><b>Tahun</b> : {{ $single->tahun }}</p>
                    <p><b>Stock</b> : {{ $single->stok }}</p>
                    <p><b>Harga Pokok</b> : {{ $single->harga_pokok }}</p>
                    <p><b>Harga Jual</b> : {{ $single->harga_jual }}</p>
                    <p><b>PPN</b> : {{ $single->ppn }}</p>
                    <p><b>Diskon</b> : {{ $single->diskon }}</p>
                    <br>
                    <a href="/buku"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection