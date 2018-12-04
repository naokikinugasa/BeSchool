<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'category_id', "url", 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Company');
    }

    public function getOwnerId()
    {
        return $this->user->id;
    }

    public function getOwnerName()
    {
        return $this->user->name;
    }

    public function getOwnerEmail()
    {
        return $this->user->email;
    }

    public function getOwnerAvatar()
    {
        return $this->user->avatar;
    }

    public function reservated_days()
    {
        return $this->hasMany('App\Reservated_day');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function pic_thum()
    {
        $fnamebase = "/movie/product/".$this->id."/thum.";

        if(file_exists(public_path().$fnamebase."gif")){
            return $fnamebase."gif";
        }else if(file_exists(public_path().$fnamebase."png")){
            return $fnamebase."png";
        }else if(file_exists(public_path().$fnamebase."jpg")){
            return $fnamebase."jpg";
        }else if(file_exists(public_path().$fnamebase."jpeg")){
            return $fnamebase."jpeg";
        }else if(file_exists(public_path().$fnamebase."mp4")){
            return $fnamebase."mp4";
        }else{
            return "";
        }
    }

}
