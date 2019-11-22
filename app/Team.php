<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function teamPlayer(){
        return $this->hasOne(Team::class);
    }
}
