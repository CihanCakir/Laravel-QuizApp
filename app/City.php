<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }
    public function operations()
    {
        return $this->belongsToMany('App\Operation')->withTimestamps();
    }
}
