<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\eventphoto;
use App\comments;
use App\User;
use App\eventUser;

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
    public function User(){
        return $this ->hasManyThrough(
            User::class,//model to access to
            eventUser::class,//Intermediate model
            'event_id',// Foreign key on intermediate table
            'id',//Local key on rerefence table
            'id',//Local key on this table
            'user_id',// Foreign key on intermediate table
        );
    }

}
