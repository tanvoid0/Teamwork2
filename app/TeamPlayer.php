<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamPlayer extends Model
{
    protected $guarded = [];
    public function player(){
        return $this->hasOne(User::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
