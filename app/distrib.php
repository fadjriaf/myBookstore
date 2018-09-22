<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distrib extends Model
{
    //
    protected $table = 'distrib';
    protected $primarykey = 'id';
    protected $fillable = ['nama','alamat','telepon'];
    public $timestamps = false;
}
