<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\eventphoto;
use App\comments;

class event extends Model
{
     protected $fillable = [
        'eventname', 'eventlocation', 'eventcost', 'eventdate','eventseats', 'eventorganizer','eventcontactemail','eventcontactphone','eventdescription',
    ];

    public function eventphoto()
    {
    return $this -> hasOne('App\eventphoto','event_id');
    }
    public function comments(){
    	return $this ->hasMany('App\comments','event_id');
    }

}
