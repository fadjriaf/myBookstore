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
                <div class="panel-heading"><h3 class="panel-title">Edit Pasok</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/pasok/{{$pasok->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">
                        
                        <div class="form-group">
                        <label for="distrib_id" class="col-md-4 control-label">Nama Distributor :</label>
                            <div class="col-md-6">
                                <select name="distrib_id" id="distrib_id" class="select2" style="width:100%; height:39px;"> 
                                    @foreach ($distrib as $data)
                                    <option value="{{ $data->id}}" {{ ($data->id == $pasok->distrib_id) ? 'selected' : '' }}>{{ $data->nama }}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Buku :</label>
                            <div class="col-md-6">
                                <select name="buku_id" id="buku" class="select2" style="width:100%; height:39px;"> 
                                    @foreach ($buku as $data)
                                    <option value="{{ $data->id}}" {{ ($data->id == $pasok->buku_id) ? 'selected' : '' }}>{{ $data->judul }}</option>  
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal" class="col-md-4 control-label">Tanggal :</label>
                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" value="{{ $pasok->tanggal }}" required autofocus>
                                @if ($errors->has('tanggal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah :</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ $pasok->jumlah }}" required autofocus>
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