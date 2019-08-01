<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'commentid', 'event_id','comment'
    ];

    public function event(){
    		return $this->belongsTo('App\event');
    }
}
