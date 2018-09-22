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
                <div class="panel-heading"><h3 class="panel-title">Detail Distributor</h3></div>

                <div class="panel-body">
                    <p><b>Nama</b> : {{ $single->nama }}</p>
                    <p><b>Alamat</b> : {{ $single->alamat }}</p>
                    <p><b>Telepon</b> : {{ $single->telepon }}</p>
                    <br>
                    <a href="/distrib"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
