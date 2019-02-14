<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'favorite_coffee',
        'working_days',
        'team_id'
    ];

    public function team()
    {
        return $this->hasOne('App\Team');
    }
}
