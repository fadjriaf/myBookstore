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
                <div class="panel-heading">Lihat Pasok</div>

                <div class="panel-body">
                    <p><b>Nama Distributor</b> : {{ $single->distrib->nama }}</p>
                    <p><b>Judul Buku</b> : {{ $single->buku->judul }}</p>
                    <p><b>Tanggal</b> : {{ $single->tanggal }}</p>
                    <p><b>Jumlah</b> : {{ $single->jumlah }}</p><br>
                    <a href="/pasok"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection