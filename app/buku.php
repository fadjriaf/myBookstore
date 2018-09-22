<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    protected $table = 'buku';
    protected $primarykey = 'id';
    protected $fillable = ['judul','noisbn','penulis','penerbit','tahun','stok','harga_pokok','harga_jual','ppn','diskon'];
    public $timestamps = false;
}
