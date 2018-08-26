<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getUserName()
    {
        return $this->user->name;
    }

    public function getUserAvatar()
    {
        return $this->user->avatar;
    }
}
