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
                <div class="panel-heading"><h3 class="panel-title">Buat Penjualan</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/penjualan" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="user_id" class="col-md-4 control-label">Petugas Kasir : </label>
                            <div class="col-md-6">
                                <select id="user_id" type="user_id" class="select2" style="width:100%; height:39px;" name="user_id">
                                    <option value="">Kasir Yang Bertugas</option>
                                    @foreach ($user as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="buku_id" class="col-md-4 control-label">Judul Buku :</label>
                            <div class="col-md-6">
                                <select id="buku_id" type="buku_id" class="select2" style="width:100%; height:39px;" name="buku_id">
                                    <option value="">Pilih Buku</option>
                                    @foreach ($buku as $data)
                                        @if($data->stok > 0)
                                        <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                         @endif
                                    @endforeach
                                    @foreach ($buku as $data)
                                    <input type="hidden" name="harga" value="{{$data->harga_jual}}">
                                    <input type="hidden" name="ppn" value="{{$data->ppn}}">
                                    <input type="hidden" name="diskon" value="{{$data->diskon}}">
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah Buku :</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ old('jumlah') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal" class="col-md-4 control-label">Tanggal :</label>
                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Buat
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection