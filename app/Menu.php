<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function platillos(){
        return $this->belongsToMany('App\Platillo');
    }
}