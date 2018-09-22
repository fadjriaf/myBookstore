<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    //
    protected $table = 'penjualan';
    protected $primarykey = 'id';
    protected $fillable = ['buku_id','user_id','jumlah','total','tanggal'];
    public $timestamps = false;

    public function buku()
    {
      return $this->belongsTo('App\buku');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
