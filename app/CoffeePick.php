<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoffeePick extends Model
{
    protected $fillable = [
        'member_id'
    ];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
