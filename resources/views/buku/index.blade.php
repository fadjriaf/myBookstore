@extends('layouts.isi')

@section('content')

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Dashboard Buku</h3></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="bukutable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                            <tr align="center">
                                <td><b>Judul</b></td>
                                <td><b>No.ISBN</b></td>
                                <td><b>Penulis</b></td>
                                <td><b>Stock</b></td>
                                <td><b>Tahun</b></td>
                                <td><b>H.Jual</b></td>
                                <td><b>Aksi</b></td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($buku as $data)
                            <tr align="center">
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->noisbn }}</td>
                                <td>{{ $data->penulis }}</td>
                                <td>{{ $data->stok }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td>{{ $data->harga_jual }}</td>
                                <td>
                                    <a href="/buku/{{$data->id}}"><i class="fa fa-info-circle fa-2x"></i>&nbsp;</a> 
                                    <a href="/buku/{{$data->id}}/edit"><i class="fa fa-edit fa-2x"></i>&nbsp;</a>
                                    <a href="{{url('buku/delete',$data->id)}}"><i class="fa fa-trash fa-2x"></i></a>
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
                    <div class="panel-heading"><h3 class="panel-title">Tambah Buku</h3></div>
    
                    <div class="panel-body">
                        <a href="buku/create"><button class="btn btn-primary">Tambah</button></a>
                    </div>
                </div>
            </div>
        </div>

@endsection
