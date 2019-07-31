<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\eventphoto;

class event extends Model
{
     protected $fillable = [
        'eventname', 'eventlocation', 'eventcost', 'eventdate','eventseats', 'eventorganizer','eventcontactemail','eventcontactphone','eventdescription',
    ];

    public function eventphoto()
    {
    return $this -> hasOne('App\eventphoto','event_id');
    }

}
