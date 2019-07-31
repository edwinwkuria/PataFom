<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventphoto extends Model
{
	protected $fillable = [ 'event_id','filename'];

    public function event(){
    		return $this->belongsTo('App\event');
    }
}
