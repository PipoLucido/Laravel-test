<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lapiz extends Model
{
    protected $table = 'lapiz';
    //relacion muchos a uno

    public function cartuchera(){
        return $this->belongsTo('App\cartuchera','id_owner');
    }
  
}
