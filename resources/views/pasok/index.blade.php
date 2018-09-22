@extends('layouts.isi')

@section('content')

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Dashboard Pasok</h3></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="pastable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                            <tr align="center">
                                <td><b>Nama Distributor</b></td>
                                <td><b>Judul</b></td>
                                <td><b>Jumlah</b></td>
                                <td><b>Tanggal</b></td>
                                <td><b>Aksi</b></td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pasok as $data)
                            <tr align="center">
                                <td>{{ $data->distrib->nama }}</td>
                                <td>{{ $data->buku->judul }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>
                                    <a href="/pasok/{{$data->id}}"><i class="fa fa-info-circle fa-2x"></i>&nbsp;</a>
                                    <a href="/pasok/{{$data->id}}/edit"><i class="fa fa-edit fa-2x"></i>&nbsp;</a>
                                    <a href="{{url('pasok/delete',$data->id)}}"><i class="fa fa-trash fa-2x"></i></a>
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
                <div class="panel-heading"><h3 class="panel-title">Tambah Pasok</h3></div>
    
                <div class="panel-body">
                    <a href="pasok/create"><button class="btn btn-primary">Tambah</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
