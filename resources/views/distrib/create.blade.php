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
                <div class="panel-heading"><h3 class="panel-title">Tambah Distributor</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/distrib" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama : </label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat :</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telepon" class="col-md-4 control-label">Telepon :</label>
                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control" name="telepon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
