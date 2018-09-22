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
                <div class="panel-heading"><h3 class="panel-title">Edit Penjualan</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/penjualan/{{$penjualan->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">
                        
                        <div class="form-group">
                       <label for="user_id" class="col-md-4 control-label">Petugas Kasir :</label>
                            <div class="col-md-6">
                                <select name="user_id" id="" class="select2" style="width:100%; height:39px;"> 
                                    @foreach ($user as $data)
                                    <option value="{{ $data->id}}" {{ ($data->id == $penjualan->user_id) ? 'selected' : '' }}>{{ $data->nama }}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="buku_id" class="col-md-4 control-label">Judul Buku</label>
                            <div class="col-md-6">
                                <select name="buku_id" id="" class="select2" style="width:100%; height:39px;"> 
                                    @foreach ($buku as $data)
                                    <option value="{{ $data->id}}" {{ ($data->id == $penjualan->buku_id) ? 'selected' : '' }}>{{ $data->judul }}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal" class="col-md-4 control-label">Tanggal :</label>
                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" value="{{ $penjualan->tanggal }}" required autofocus>
                                @if ($errors->has('tanggal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $penjualan->jumlah }}" required autofocus>
                                @if ($errors->has('jumlah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" value="edit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection