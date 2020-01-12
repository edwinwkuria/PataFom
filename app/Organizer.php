<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
     protected $fillable = [
        'user_id','companyName','companyEmail','companyCountry','companyPhoneNumber','companyPhoneNumber2','companyProfile',
    ];
        public function user(){
    		return $this->belongsTo('App\User');
    }
}
