<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Berita extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'artikel';
    protected $table ="beritas";

    protected $fillable = [

    'judul','image','isi'
    ];
}
