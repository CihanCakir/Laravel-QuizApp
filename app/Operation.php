<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function  cities()
    {
        return $this->belongsToMany('App\City')->withTimestamps();
    }
}
