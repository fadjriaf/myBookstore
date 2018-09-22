@extends('layouts.isi')

@section('content')

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Dashboard Penjualan</h3></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="penjtable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                            <tr align="center">
                                <td><b>Petugas Kasir</b></td>
                                <td><b>Judul Buku</b></td>
                                <td><b>Jumlah</b></td>
                                <td><b>Total</b></td>
                                <td><b>Tanggal</b></td>
                                <td><b>Aksi</b></td>
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
                                <td>
                                    <a href="/penjualan/{{$data->id}}"><i class="fa fa-info-circle fa-2x"></i>&nbsp;</a>
                                    <a href="/penjualan/{{$data->id}}/edit"><i class="fa fa-edit fa-2x"></i>&nbsp;</a>
                                    <a href="{{url('penjualan/delete',$data->id)}}"><i class="fa fa-trash fa-2x"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Tambah Penjualan</h3></div>
    
                    <div class="panel-body">
                        <a href="penjualan/create"><button class="btn btn-primary">Tambah</button></a>
                    </div>
                </div>
            </div>
        </div>

@endsection
