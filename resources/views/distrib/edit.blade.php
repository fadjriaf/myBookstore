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
                <div class="panel-heading"><h3 class="panel-title">Edit Distributor</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/distrib/{{$edit->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">

                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama : </label>
                            <div class="col-md-6">
                                <input id="nama" value="{{$edit->nama}}" type="text" class="form-control" name="nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat :</label>
                            <div class="col-md-6">
                                <input id="alamat" value="{{$edit->alamat}}" type="text" class="form-control" name="alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telepon" class="col-md-4 control-label">Telepon :</label>
                            <div class="col-md-6">
                                <input id="telepon" value="{{$edit->telepon}}" type="text" class="form-control" name="telepon" required>
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
