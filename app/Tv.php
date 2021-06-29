<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    public function fields() {
        return $this->belongsToMany('App\Field');
    }
}
