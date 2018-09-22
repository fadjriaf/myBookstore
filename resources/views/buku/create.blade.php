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
                <div class="panel-heading"><h3 class="panel-title">Tambah Buku</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/buku" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Judul : </label>
                            <div class="col-sm-6">
                                <input id="judul"  type="text" class="form-control" name="judul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noisbn" class="col-md-4 control-label">No.ISBN :</label>
                            <div class="col-md-6">
                                <input id="noisbn" type="text" class="form-control" name="noisbn" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penulis" class="col-md-4 control-label">Penulis :</label>
                            <div class="col-md-6">
                                <input id="penulis" type="text" class="form-control" name="penulis" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit :</label>
                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tahun" class="col-md-4 control-label">Tahun :</label>
                            <div class="col-md-6">
                                <input id="tahun" type="text" class="form-control" name="tahun" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-md-4 control-label">Stock :</label>
                            <div class="col-md-6">
                                <input id="stok" type="text" class="form-control" name="stok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_pokok" class="col-md-4 control-label">Harga Pokok :</label>
                            <div class="col-md-6">
                                <input id="harga_pokok" type="text" class="form-control" name="harga_pokok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_jual" class="col-md-4 control-label">Harga Jual :</label>
                            <div class="col-md-6">
                                <input id="harga_jual" type="text" class="form-control" name="harga_jual" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ppn" class="col-md-4 control-label">PPN :</label>
                            <div class="col-md-6">
                                <input id="ppn" type="text" class="form-control" name="ppn" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="diskon" class="col-md-4 control-label">Diskon :</label>
                            <div class="col-md-6">
                                <input id="diskon" type="text" class="form-control" name="diskon" required>
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
