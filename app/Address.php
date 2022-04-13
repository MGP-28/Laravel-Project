<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    public function player(){
        return $this->hasOne(Player::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
