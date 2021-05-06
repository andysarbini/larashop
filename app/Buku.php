<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;

    protected $table = "buku";

    public function categories(){
        return $this->belongsToMany('App\Kategori');
    
    }
}

