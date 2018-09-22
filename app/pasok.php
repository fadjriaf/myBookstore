<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    //
    protected $table = 'pasok';
    protected $primarykey = 'id';
    protected $fillable = ['distrib_id','buku_id','jumlah','tanggal'];
    public $timestamps = false;

    public function buku()
    {
      return $this->belongsTo('App\buku');
    }

    public function distrib()
    {
      return $this->belongsTo('App\distrib');
    }
}
