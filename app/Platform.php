<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Platform extends Model
{
    public function clan() {
        return $this->belongsToMany('App\Clans');
    }
}
