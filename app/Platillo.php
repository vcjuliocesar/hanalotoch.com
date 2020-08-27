<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    public function menu(){
        return $this->belongsToMany('App\Menu');
    }
}
