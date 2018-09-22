@extends('layouts.master')

@section('content')

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Laporan Data Penjualan</h3></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="hometable" class="table table-striped table-bordered" style="width:100%; height:39px;">
                            <thead>
                            <tr align="center">
                                <td><b>Petugas Kasir</b></td>
                                <td><b>Judul Buku</b></td>
                                <td><b>Jumlah</b></td>
                                <td><b>Total</b></td>
                                <td><b>Tanggal</b></td>
                            </tr>
                            </thead>

                            
                            <tbody>
                            @foreach($penjualan as $data)
                            <tr align="center">
                                <td>{{ $data->user->nama }}</td>
                                <td>{{ $data->buku->judul }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->total }}</td>
                                <td>{{ $data->tanggal }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
