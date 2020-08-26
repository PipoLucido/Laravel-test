<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartuchera extends Model
{
    protected $table = 'cartucheras';

    //relacion uno a muchos
    public function lapices(){

        return $this->hasMany('App\lapiz','id_owner', 'id');
        
    }

}
