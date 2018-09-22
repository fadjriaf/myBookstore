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
                <div class="panel-heading"><h3 class="panel-title">Dashboard Kasir</h3></div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="usertable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                            <tr align="center">
                                <td><b>Nama</b></td>
                                <td><b>Alamat</b></td>
                                <td><b>Telepon</b></td>
                                <td><b>Aksi</b></td>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach($user as $data)
                            <tr align="center">
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>
                                    <a href="{{ route('detail.user', $data->id) }}"><i class="fa fa-info-circle fa-2x"></i>&nbsp;</a>
                                    <a href="{{ route('edit.user', $data->id) }}"><i class="fa fa-edit fa-2x">  </i>&nbsp;</a>
                                    <a href="{{ route('delete.user', $data->id) }}"><i class="fa fa-trash fa-2x"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
