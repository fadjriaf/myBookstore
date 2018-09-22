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
                <div class="panel-heading"><h3 class="panel-title">Edit Buku</h3></div>
                
                <div class="panel-body">
                <form class="form-horizontal" action="/buku/{{$edit->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Judul : </label>
                            <div class="col-md-6">
                                <input id="judul" type="text" value="{{$edit->judul}}" class="form-control" name="judul" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noisbn" class="col-md-4 control-label">No.ISBN :</label>
                            <div class="col-md-6">
                                <input id="noisbn" type="text" value="{{$edit->noisbn}}" class="form-control" name="noisbn" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penulis" class="col-md-4 control-label">Penulis :</label>
                            <div class="col-md-6">
                                <input id="penulis" type="text" value="{{$edit->penulis}}" class="form-control" name="penulis" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit :</label>
                            <div class="col-md-6">
                                <input id="penerbit" type="text" value="{{$edit->penerbit}}" class="form-control" name="penerbit" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tahun" class="col-md-4 control-label">Tahun :</label>
                            <div class="col-md-6">
                                <input id="tahun" type="text" value="{{$edit->tahun}}" class="form-control" name="tahun" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-md-4 control-label">Stock :</label>
                            <div class="col-md-6">
                                <input id="stok" type="text" value="{{$edit->stok}}" class="form-control" name="stok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_pokok" class="col-md-4 control-label">Harga Pokok :</label>
                            <div class="col-md-6">
                                <input id="harga_pokok" type="text" value="{{$edit->harga_pokok}}"class="form-control" name="harga_pokok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga_jual" class="col-md-4 control-label">Harga Jual :</label>
                            <div class="col-md-6">
                                <input id="harga_jual" type="text" value="{{$edit->harga_jual}}" class="form-control" name="harga_jual" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ppn" class="col-md-4 control-label">PPN :</label>
                            <div class="col-md-6">
                                <input id="ppn" type="text" value="{{$edit->ppn}}" class="form-control" name="ppn" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="diskon" class="col-md-4 control-label">Diskon :</label>
                            <div class="col-md-6">
                                <input id="diskon" type="text" value="{{$edit->diskon}}" class="form-control" name="diskon" required>
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
    </div>

@endsection
