<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function tvs() {
        return $this->belongsToMany('App\Tv');
    }
}
