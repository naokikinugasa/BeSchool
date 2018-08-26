<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservated_day extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
