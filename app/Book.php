<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = "buku";

    public function categories(){
        return $this->belongsToMany('App\Category');
    
    }
}

