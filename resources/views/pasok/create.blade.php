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
                <div class="panel-heading"><h3 class="panel-title">Buat Pasok</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/pasok" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="distrib_id" class="col-md-4 control-label">Nama Distributor : </label>
                            <div class="col-md-6">
                                <select id="distrib_id" type="text" class="select2" name="distrib_id" style="width:100%; height:39px;">
                                    <option value="">Pilih Distributor</option>
                                    @foreach ($distrib as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="buku_id" class="col-md-4 control-label">Buku :</label>
                            <div class="col-md-6">
                                <select id="buku_id" type="text" class="select2" name="buku_id" style="width:100%; height:39px;">
                                    <option value="">Pilih Buku</option>
                                    @foreach ($buku as $data)
                                    <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                         </div>
                            
                        <div class="form-group">
                            <label for="tanggal;" class="col-md-4 control-label">Tanggal :</label>
                            <div class="col-md-6">
                                <input id="tanggal" type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah" class="col-md-4 control-label">Jumlah :</label>
                            <div class="col-md-6">
                                <input id="jumlah" type="text" class="form-control" name="jumlah" value="{{ old('jumlah') }}" required>
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